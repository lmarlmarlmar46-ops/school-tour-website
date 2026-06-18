<?php
// Database Configuration
// Use environment variables from Railway or fallback to local values
define('DB_HOST', getenv('PGHOST') ?: 'localhost');
define('DB_USER', getenv('PGUSER') ?: 'postgres');
define('DB_PASS', getenv('PGPASSWORD') ?: '');
define('DB_NAME', getenv('PGDATABASE') ?: 'railway');
define('DB_PORT', getenv('PGPORT') ?: '5432');

// PostgreSQL connection string for Railway
$db_connection_string = sprintf(
    "host=%s port=%s dbname=%s user=%s password=%s sslmode=require",
    DB_HOST,
    DB_PORT,
    DB_NAME,
    DB_USER,
    DB_PASS
);

// Create PostgreSQL connection
$conn = pg_connect($db_connection_string);

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Session configuration
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Helper function to escape strings for PostgreSQL
function pg_escape_string_custom($string) {
    global $conn;
    return pg_escape_string($conn, $string);
}

// Helper function to execute query and return result
function db_query($query) {
    global $conn;
    return pg_query($conn, $query);
}

// Helper function to fetch associative array
function db_fetch_assoc($result) {
    return pg_fetch_assoc($result);
}

// Helper function to get number of rows
function db_num_rows($result) {
    return pg_num_rows($result);
}

// Helper function to get last insert id (PostgreSQL uses RETURNING)
function db_insert_id($result, $field = 'id') {
    $row = pg_fetch_assoc($result);
    return $row ? $row[$field] : null;
}
?>
