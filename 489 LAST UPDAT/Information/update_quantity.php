<?php
session_start();
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['medicine_ID']) && isset($_POST['quantity_change'])) {
        $medicine_ID = $_POST['medicine_ID'];
        $quantityChange = intval($_POST['quantity_change']);

 // Add item to cart
try {
    $insertStmt = $db->prepare("INSERT INTO cart (username, medicine_ID) VALUES (:username, :medicine_ID)");
    $insertStmt->bindParam(':username', $_SESSION['user']);
    $insertStmt->bindParam(':medicine_ID', $medicine_ID);
    $insertStmt->execute();
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
// Remove item from cart
// Remove specific item from cart
try {
    $deleteStmt = $db->prepare("DELETE FROM cart WHERE username = :username AND medicine_ID = :medicine_ID LIMIT 1");
    $deleteStmt->bindParam(':username', $_SESSION['user']);
    $deleteStmt->bindParam(':medicine_ID', $medicine_ID);
    $deleteStmt->execute();
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

                header("Location: cart.php");
                exit;
            }
}
    

?>
