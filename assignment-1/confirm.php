<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Confirmed Orders</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #fff8f0;
        }
        main {
            display: inline-block;
            text-align: left;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
    </style>
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
        </main>
    </body>


</html>