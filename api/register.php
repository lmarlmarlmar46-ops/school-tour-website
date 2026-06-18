<?php
require_once '../config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Validate required fields
$required = ['firstName', 'lastName', 'email', 'phone', 'userType', 'password'];
foreach ($required as $field) {
    if (empty($input[$field])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Missing required field: ' . $field]);
        exit;
    }
}

// Validate email
if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// Validate password length
if (strlen($input['password']) < 8) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Password must be at least 8 characters']);
    exit;
}

// Check if email already exists
$email = pg_escape_string_custom($input['email']);
$query = "SELECT id FROM users WHERE email = '$email'";
$result = db_query($query);

if ($result && db_num_rows($result) > 0) {
    http_response_code(409);
    echo json_encode(['success' => false, 'message' => 'Email already registered']);
    exit;
}

// Hash password
$hashedPassword = password_hash($input['password'], PASSWORD_DEFAULT);

// Escape input values
$firstName = pg_escape_string_custom($input['firstName']);
$lastName = pg_escape_string_custom($input['lastName']);
$phone = pg_escape_string_custom($input['phone']);
$userType = pg_escape_string_custom($input['userType']);
$hashedPasswordEscaped = pg_escape_string_custom($hashedPassword);

// Insert user (with RETURNING to get ID)
$query = "INSERT INTO users (first_name, last_name, email, phone, user_type, password) 
          VALUES ('$firstName', '$lastName', '$email', '$phone', '$userType', '$hashedPasswordEscaped') 
          RETURNING id";
$result = db_query($query);

if ($result) {
    $userId = db_insert_id($result);
    echo json_encode([
        'success' => true, 
        'message' => 'Registration successful',
        'userId' => $userId
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Registration failed']);
}

pg_close($conn);
?>
