<?php
session_start();
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_cart_button'])) {
    $username = $_SESSION['user'];

    try {
        $deleteStmt = $db->prepare("DELETE FROM cart WHERE username = :username");
        $deleteStmt->bindParam(':username', $username);
        $deleteStmt->execute();

        header("Location: cart.php"); // Redirect back to the cart page after deletion
        exit;
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
