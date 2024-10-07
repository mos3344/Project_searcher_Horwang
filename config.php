<?php
// Database configuration constants
const DBHOST = 'localhost';
const DBUSER = 'root';
const DBPASS = 'root'; // Ensure there are no trailing spaces
const DBNAME = 'search_db';

// DSN (Data Source Name) for PDO
$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;

$conn = null;

try {
    // Create a new PDO instance
    $conn = new PDO($dsn, DBUSER, DBPASS);
    
    // Set the default fetch mode to associative array
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "Connection successful!"; // Optional: For debugging
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>