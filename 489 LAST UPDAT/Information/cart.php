<?php
session_start(); // Start the session or resume existing session
require("connection.php");

// Check if the user is logged in or set your authentication mechanism
if (!isset($_SESSION['user'])) {
    // Redirect to login or handle authentication if user is not logged in
    header("Location: login-signin.php");
    exit;
}

// Get the username from the session
$username = $_SESSION['user'];

try {
    $stmt = $db->prepare("SELECT medicine_ID, medicine_name, price, COUNT(*) as quantity FROM cart WHERE username = :username GROUP BY medicine_ID, medicine_name, price");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $cart = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: Failed to fetch cart data - " . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cartstyle.css"> <!-- Include your CSS file -->
</head>
<body>
    <h1>Shopping Cart</h1>

    <?php if ($stmt->rowCount() > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Medicine Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!-- ... Previous HTML code ... -->
            <tbody>
                <?php 
                $totalPrice = 0;
                foreach ($cart as $item) : 
                    $totalPrice += $item['price'] * $item['quantity'];
                ?>
                    <tr>
                        <td><?php echo $item['medicine_name']; ?></td>
                        <td>$<?php echo $item['price']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>$<?php echo $item['price'] * $item['quantity']; ?></td>
                        <td>
                        
                        </td>
                    </tr>
                   

                <?php endforeach; 
                ?>
                 <form action="buy_all.php" method="post">
    <?php foreach ($cart as $item) : ?>
        <input type="hidden" name="medicine_IDs[]" value="<?php echo $item['medicine_ID']; ?>">
    <?php endforeach; ?>
    

            </tbody>

<!-- ... Remaining HTML code ... -->

            <tfoot>
                <tr>
                    <td colspan="3">Total:</td>
                    <td colspan="2">$<?php echo $totalPrice; ?></td>
                </tr>
            </tfoot>
        </table>
        <input type="submit" name="buy_all_button" value="Buy">
</form>


<form action="delete_cart.php" method="post">
    <input type="submit" name="delete_cart_button" value="Delete Cart">
</form>
    <?php else : ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>

