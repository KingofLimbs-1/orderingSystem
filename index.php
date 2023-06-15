<?php
session_start();
// Session variable retrieval
$username = $_SESSION['username'];
// ...
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/styles.css" />
  <title>Dropping Donuts</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="rowContainer">
    <div class="logoContainer">
      <a href="index.php">
        <h1>Dropping Donuts</h1>
      </a>
    </div>
    <div class="navBarContainer">
      <ul class="navBarItems">
        <li><?php echo $username ?></li>
        <li>
          <a href="/php/login.php">
            <img id="userImg" src="/images/user.png" alt="UserIcon" />
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero -->
  <section class="heroBanner">
    <div class="innerContainer">
      <img src="/images/heroDonut.png" alt="bigPicOfDonuts" />
      <div class="callToAction">
        <p>Dropping Donuts:</p>
        <p>Savor the Taste of Heavenly Delights!</p>
      </div>
      <div class="shopButtonContainer">
        <a class="shopBtn" href="#shopSection">
          <p>Shop Now</p>
        </a>
      </div>
    </div>
  </section>
  <!-- Hero end -->

  <!-- Shop content -->
  <section id="shopSection">
    <div class="shopHeading">
      <h1>Build your donut.</h1>
    </div>
    <form action="/include/paymentProcess.php" method="POST">
      <div class="baseSection" id="checkSection">
        <h1>Base</h1>
        <div class="baseContainer" id="checkContainer">
          <input type="checkbox" id="base1" name="base[]" value="Plain" />
          <label for="base1">Plain - R4,00</label>
        </div>
        <div class="baseContainer" id="checkContainer">
          <input type="checkbox" id="base2" name="base[]" value="Glazed" data-numeric-value="2" />
          <label for="base2">Glaze - R2,00</label>
        </div>
      </div>
      <div class="toppingSection" id="checkSection">
        <h1>Toppings</h1>
        <div class="toppingContainer" id="checkContainer">
          <input type="checkbox" id="topping1" name="toppings[]" value="Sprinkles" />
          <label for="topping1">Sprinkles - R2,00</label>
        </div>

        <div class="toppingContainer" id="checkContainer">
          <input type="checkbox" id="topping2" name="toppings[]" value="Chocolate" />
          <label for="topping2">Chocolate - R2,00</label>
        </div>

        <div class="toppingContainer" id="checkContainer">
          <input type="checkbox" id="topping3" name="toppings[]" value="Cinnamon Sugar" />
          <label for="topping3">Cinnamon Sugar - R2,00</label>
        </div>
      </div>

      <div class="fillingSection" id="checkSection">
        <h1>Fillings</h1>
        <div class="fillingContainer" id="checkContainer">
          <input type="checkbox" id="filling1" name="fillings[]" value="Cream" data-numeric-value="2" />
          <label for="filling1">Cream - R2,00</label>
        </div>

        <div class="fillingContainer" id="checkContainer">
          <input type="checkbox" id="filling2" name="fillings[]" value="Strawberry" data-numeric-value="2" />
          <label for="filling2">Strawberry - R2,00</label>
        </div>

        <div class="fillingContainer" id="checkContainer">
          <input type="checkbox" id="filling3" name="fillings[]" value="Apricot" data-numeric-value="2" />
          <label for="filling3">Apricot - R2,00</label>
        </div>
      </div>

      <div class="buttons">
        <div class="quantity">
          <input type="number" name="quantity" value="1" min="1">
        </div>

        <div class="submitBtn">
          <button type="submit">Checkout</button>
        </div>
      </div>
    </form>

    <div class="shopItems">
      <img src="/images/donutOfferings.png" alt="picOfDonuts">
    </div>
  </section>
  <!-- Shop content end -->
</body>

</html>