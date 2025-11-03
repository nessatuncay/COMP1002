<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Confirmed Orders</title>
    </head>
    <body>
        <header>
            <h1>Pizza Coven - Order Confirmations</h1>
            <p>Thank you for ordering from Pizza Coven! Here are all of the confirmed pizza orders!</p>
        </header>

        <main>
            <h3>Order Details:</h3>
            <p>Pizza Amount: <?php echo htmlspecialchars($_POST['pizza_amount']); ?></p>
            <p>Pizza Size: <?php echo htmlspecialchars($_POST['size']); ?></p>
            <p>Pizza Shape: <?php echo htmlspecialchars($_POST['shape']); ?></p>
            <p>Toppings: 
                <?php 
                    if (!empty($_POST['toppings'])) {
                        echo htmlspecialchars(implode(", ", $_POST['toppings']));
                    } else {
                        echo "No toppings selected";
                    }
                ?>
            </p>
            <p>Crust Type: <?php echo htmlspecialchars($_POST['crust_type']); ?></p>
            <p>Order Type: <?php echo htmlspecialchars($_POST['order_type']); ?></p>

            <h4>Customer Information:</h4>
            <p>Name: <?php echo htmlspecialchars($_POST['name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($_POST['email']); ?></p>
            <p>Phone Number: <?php echo htmlspecialchars($_POST['phone']); ?></p>
            <p>Address: <?php echo htmlspecialchars($_POST['address']); ?></p>


</html>