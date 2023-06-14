<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dropping Donuts</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="/css/styles.css" />
  </head>
  
  <body>
    <!-- Navbar -->
    <nav class="rowContainer">
      <div class="logoContainer">
        <a href="#">
          <h1>Dropping Donuts</h1>
        </a>
      </div>
      <div class="navBarContainer">
        <ul class="navBarItems">
          <li>Username</li>
          <li>
            <a href="#">
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
        <img src="/images/heroDonut.png" alt="" />
        <div class="callToAction">
          <p>Dropping Donuts: Savor the Taste of Heavenly Delights!</p>
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
      <form action="php/form.php" method="post">
        <div class="baseSection">
          <h1>Base</h1>
          <input type="checkbox" name="base[]" value="option1" />Plain
          <input type="checkbox" name="base[]" value="option2" />Glaze - R2,00
        </div>
        <div class="toppingSection">
          <h1>Toppings</h1>
          <input type="checkbox" name="toppings[]" value="option3" />Sprinkles -
          R2,00
          <input type="checkbox" name="toppings[]" value="option4" />Chocolate -
          R2,00
          <input type="checkbox" name="toppings[]" value="option5" />Cinnamon
          Sugar - R2,00
        </div>
        <div class="fillingSection">
          <h1>Fillings</h1>
          <input type="checkbox" name="fillings[]" value="option6" />Cream -
          R2,00
          <input type="checkbox" name="fillings[]" value="option7" />Strawberry
          - R2,00
          <input type="checkbox" name="fillings[]" value="option8" />Apricot -
          R2,00
        </div>
        <div class="submitBtn">
          <button type="submit">Submit</button>
        </div>
      </form>
    </section>
    <!-- Shop content end -->
  </body>
</html>
