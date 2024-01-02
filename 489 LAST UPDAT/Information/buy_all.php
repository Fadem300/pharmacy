<?php
session_start();
require("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['buy_all_button'])) {
    $username = $_SESSION['user'];

    try {
        // Fetch all medicine IDs from the cart for the current user
        $stmt = $db->prepare("SELECT medicine_ID FROM cart WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $medicineIDs = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Decrement the quantity of each medicine in the medicine table
        foreach ($medicineIDs as $medicine_ID) {
            $updateStmt = $db->prepare("UPDATE medicine SET quantity = GREATEST(quantity - 1, 0) WHERE medicine_ID = :medicine_ID");
            $updateStmt->bindParam(':medicine_ID', $medicine_ID);
            $updateStmt->execute();
        }

        // Clear the cart for the current user after successful purchase
        $clearCartStmt = $db->prepare("DELETE FROM cart WHERE username = :username");
        $clearCartStmt->bindParam(':username', $username);
        $clearCartStmt->execute();

        // Display success message
        echo "Order successfully placed!";
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
