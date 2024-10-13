<?php


try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=sql110.infinityfree.com;dbname=if0_37102316_ThanhTung126", "if0_37102316", "Thanhtung126");

    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally: echo 'Server Connected Successfully'; // Uncomment for testing
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}
?>


