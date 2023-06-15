<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Checkbox data retrieval
    $selectedBase = $_POST['base'];
    $selectedTopping = $_POST['toppings'];
    $selectedFilling = $_POST['fillings'];
    $selectedQuantity = $_POST['quantity'];
    // ...

    // Session variable assignment
    $_SESSION['base'] = $selectedBase;
    $_SESSION['toppings'] = $selectedTopping;
    $_SESSION['fillings'] = $selectedFilling;
    $_SESSION['quantity'] = $selectedQuantity;
    // ...

    // Checkbox item price definitions
    $basePrices = array(
        'Plain' => 4,
        'Glazed' => 4
    );

    $toppingPrices = array(
        'Sprinkles' => 2,
        'Chocolate' => 2,
        'Cinnamon Sugar' => 2
    );

    $fillingPrices = array(
        'Cream' => 2,
        'Strawberry' => 2,
        'Apricot' => 2
    );
    // ...

    // FUNCTIONS

    // Display "add ons" function
    function displayAddOn($array)
    {
        if (empty($array)) {
            echo "Please fill in all required fields";
        } else {
            return implode("</br>", $array);
        }
    }
    // ...

    // displayValues function calls
    $desiredBase = displayAddOn($selectedBase);
    $desiredToppings = displayAddOn($selectedTopping);
    $desiredFillings = displayAddOn($selectedFilling);
    // ...

    // "Add on" mark-up creation
    $addOn = "<div class ='selectedItems'>
    <p>$desiredBase</p>
    <p>$desiredToppings</p>
    <p>$desiredFillings</p>
    </div>";
    // ...

    // Session variable assignment
    $_SESSION['addOn'] = $addOn;
    // ...

    // "Calculate price of a single donut" function
    // aka the subtotal..
    function calcPriceOfDonut($array, $price)
    {
        $subTotal = 0;
        foreach ($array as $item) {
            $subTotal += $price[$item];
        }
        return $subTotal;
    }
    // ...

    // "calcPriceOfDonut" function calls
    $selectedBasePrice = calcPriceOfDonut($selectedBase, $basePrices);
    $selectedToppingPrice = calcPriceOfDonut($selectedTopping, $toppingPrices);
    $selectedFillingPrice = calcPriceOfDonut($selectedFilling, $fillingPrices);
    // ...

    // "Subtotal" mark-up creation
    $combinedPrice = ($selectedBasePrice + $selectedToppingPrice + $selectedFillingPrice);
    $subtotal = "R" . $combinedPrice . ",00";
    // ...

    // "Total" mark-up creation
    $multipliedPrice = ($combinedPrice * $selectedQuantity);
    $total = "R" . $multipliedPrice . ",00";
    // ...

    // Session variable assignment
    $_SESSION['subtotal'] = $subtotal;
    $_SESSION['total'] = $total;
    // ...

    // Display "quantity" function
    function displayQuantity($variable)
    {
        if (empty($variable)) {
            echo "Please input a number";
        } else {
            return $variable;
        }
    }
    // ...

    // displayQuantity function call
    $desiredQuantity = displayQuantity($selectedQuantity);
    // ...

    // "Quantity" mark-up creation
    $quant = "<span>$desiredQuantity</span>";
    // ...

    // Session variable assignment
    $_SESSION['quant'] = $quant;
    // ...

    // FUNCTIONS END

    // INPUT VALIDATION

    // Error variables
    $baseInput = $selectedBase;
    $fillingInput = $selectedFilling;
    // ...

    // Errors array creation
    $errors = array();
    // ...

    // Validate username
    $username = $_SESSION['username'];
    if (!isset($username)) {
        $errors[] = "Please login to your account before fulfilling your order";
    }

    // Validate base checkbox
    if (count($baseInput) > 1) {
        $errors[] = "Only 1 base selection allowed.";
    }
    // ...

    // Validate filling checkbox
    if (count($fillingInput) > 1) {
        $errors[] = "Only 1 filling selection allowed.";
    }
    // ...

    // Check if errors occcured
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "</br>";
        }
    } else {
        header('Location: /php/payment.php');
        exit();
    }
    // ...

    // INPUT VALIDATION END
}
// ...