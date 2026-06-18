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

// Validate email
if (empty($input['email']) || !filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// Escape email
$email = pg_escape_string_custom($input['email']);

// Insert or update subscriber (PostgreSQL ON CONFLICT)
$query = "INSERT INTO newsletter_subscribers (email) VALUES ('$email') 
          ON CONFLICT (email) DO UPDATE SET active = TRUE";
$result = db_query($query);

if ($result) {
    echo json_encode([
        'success' => true,
        'message' => 'Successfully subscribed to newsletter'
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Subscription failed']);
}

pg_close($conn);
?>
