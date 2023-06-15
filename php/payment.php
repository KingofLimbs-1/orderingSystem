<?php
session_start();

// Session variable retrieval
$username = $_SESSION['username'];
$addOn = $_SESSION['addOn'];
$quant = $_SESSION['quant'];
$subtotal = $_SESSION['subtotal'];
$total = $_SESSION['total'];
// ...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="../css/payment.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="rowContainer">
        <div class="logoContainer">
            <a href="../index.php">
                <h1>Dropping Donuts</h1>
            </a>
        </div>
        <div class="navBarContainer">
            <ul class="navBarItems">
                <li><?php echo $username ?></li>
                <li>
                    <a href="../php/login.php">
                        <img id="userImg" src="../images/user.png" alt="UserIcon" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Receipt -->
    <section class="receiptSection">
        <div class="receiptContainer">
            <div class="receiptHeading">
                <h1>Dropping Donuts</h1>
            </div>

            <div class="receiptBody">
                <div class="username">
                    <h2>CUSTOMER NAME: <?php echo $username ?></h2>
                </div>
                <table>
                    <thead>
                        <th>ITEM</th>
                        <th>ADD ONS</th>
                        <th>QUANTITY</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>CUSTOM</br>DONUT</td>
                            <td id="addOn"><?php echo $addOn ?></td>
                            <td><?php echo $quant ?></td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td>SUBTOTAL</td>
                            <td></td>
                            <td><?php echo $subtotal ?></td>
                        </tr>

                        <tr>
                            <td>TOTAL</td>
                            <td></td>
                            <td><?php echo $total ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <h3>THANK YOU!</h3>
        </div>
    </section>
    <!-- Receipt end -->
</body>

</html>