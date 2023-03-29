<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="icon" href="images/logol.png">
    <meta charset="UTF-8">
    <title>Menu</title>

    <link rel="stylesheet" href="css/styles_apiwp.css">

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }

    </style>

<style>

body {
  background-image: url("images/bcmenu.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
 
</head>

<body>

<div class="top">
  <div class="container">
  <div class="row"> 
<div class="col-md-6">
<ul class="navigation">
<li><a href="index.php">Home</a></li>
  <li><a href="quiz_game.html">Quiz Game</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="menu.php">Menu</a></li>
  <div>
  <li><a href="mycart.php"><IMG SRC="images/cart.gif" class="btn btn-outline-success" style="width: 80px; height: 60px; position: absolute; right: 0%;"></a></li>
</ul>
</div>
</div>
</div>
</div>





<div class="row">
  <div class="column">
    <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/salata1.jpg" alt="Salad1" style="width:100%">
  <h1>Shrimp And Avocado Salad</h1>
  <p class="price">38 RON</p>
  <p>pan-seared citrus shrimp, greens, extra virgin olive oil, lemon juice, avocado, shallot, sliced almonds, kosher salt and pepper</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Shrimp And Avocado Salad">
 <input type="hidden" name="Price" value="38">
</div>
</form>
</div>

  <div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/sup1.jpg" alt="Soup" style="width:100%">
  <h1>Mushroom Tom Kha Soup</h1>
  <p class="price">42RON</p>
  <p>cremini shiitake, coconut oil, ginger, red chile pepper, lemongrass paste, organic tamari, limes, salt and pepper</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Mushroom Tom Kha Soup">
 <input type="hidden" name="Price" value="42">
</div>
</form>
</div>


<div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/salata2.jpg" alt="Salad2" style="width:100%">
  <h1>Blackberry, Avocado and Arugula Salad</h1>
  <p class="price">29 RON</p>
  <p>baby arugula, blackberries and blueberries, cucumber, avocado, vegan feta, hazelnuts, lime mint vinaigrette</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Blackberry, Avocado and Arugula Salad">
 <input type="hidden" name="Price" value="29">
</div>
</form>
</div>

</div>

<div class="row">
  <div class="column">
    <form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/fel7.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Creamy Spinach and Cheese Ravioli</h1>
  <p class="price">44 RON</p>
  <p>cheese ravioli, avocado oil, onion, garlic, unsalted butter, milk, parmesan cheese, pesto, mozzarella cheese</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Creamy Spinach and Cheese Ravioli">
 <input type="hidden" name="Price" value="44">
</div>
</form>
</div>

  <div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/fel8.jpg" alt="Salmon" style="width:100%">
  <h1>Salmon with Lemon Cream Sauce</h1>
  <p class="price">56 RON</p>
  <p>salmon fillet,  olive oil, lemon, white wine,  heavy cream, unsalted butter, asparagus, pesto, tomatoes</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Salmon with Lemon Cream Sauce">
 <input type="hidden" name="Price" value="56">
</div>
</form>
</div>


<div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/fel2.jpg" alt="Tortellini" style="width:100%">
  <h1>Tortellini with Sun-Dried Tomatoes</h1>
  <p class="price">40 RON</p>
  <p>cheese tortellini, unsalted butter, garlic, heavy cream, parmesan cheese, baby spinach, sun-dried tomatoes</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Tortellini with Sun-Dried Tomatoes">
 <input type="hidden" name="Price" value="40">
</div>
</form>
</div>

</div>

<div class="row">
  <div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/desert1.jpg" alt="Mousse" style="width:100%">
  <h1> Strawberries Mousse Dessert</h1>
  <p class="price">35 RON</p>
  <p>blueberries, sugar, sour cream, black and white chocolate, strawberries</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Strawberries Mousse Dessert">
 <input type="hidden" name="Price" value="35">
</div>
</form>
</div>

  <div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/desert3.jpg" alt="Cake" style="width:100%">
  <h1>Mini Cherry and Blueberries Cake</h1>
  <p class="price">35 RON</p>
  <p>cherry, sugar, sour cream, black and white chocolate, blueberries</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Mini Cherry and Blueberries Cake">
 <input type="hidden" name="Price" value="35">
</div>
</form>
</div>


<div class="column">
<form action="manage_cart.php" method="POST">
<div class="card">
  <img src="images/desert4.jpg" alt="Chilled" style="width:100%">
  <h1>Chilled Chocolate Fondant</h1>
  <p class="price">35 RON</p>
  <p>black and white chocolate, cheese cream, salted caramel, citrus, sugar</p>
 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
 <input type="hidden" name="Item_Name" value="Chilled Chocolate Fondant">
 <input type="hidden" name="Price" value="35">
</div>
</form>
</div>

</div>


</body>
</html>