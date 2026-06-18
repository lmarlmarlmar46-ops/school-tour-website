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
if (empty($input['email']) || empty($input['password'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email and password required']);
    exit;
}

// Get user from database (PostgreSQL parameterized query)
$email = pg_escape_string_custom($input['email']);
$query = "SELECT id, first_name, last_name, email, phone, user_type, password FROM users WHERE email = '$email'";
$result = db_query($query);

if (!$result || db_num_rows($result) === 0) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
    exit;
}

$user = db_fetch_assoc($result);

// Verify password
if (!password_verify($input['password'], $user['password'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
    exit;
}

// Create session
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];
$_SESSION['user_type'] = $user['user_type'];

// Remove password from response
unset($user['password']);

echo json_encode([
    'success' => true,
    'message' => 'Login successful',
    'user' => $user
]);

pg_close($conn);
?>
