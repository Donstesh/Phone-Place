<?php

?>
<html>
    <head>
        <title>Phone Place</title>
    </head>
    <body>
    <!DOCTYPE html>

<body>

    <ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="contact-seller.php">Contact Seller</a></li>
    <li><a href="register.php">Sign Up</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>

  </body>
    <style>
      *{
        margin: 0;
        padding: 0;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0px;
        overflow: hidden;
        background-color: lightgray;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: blue;
      font-size:20px;
        text-align: center;
        padding: 10px 20px;
        text-decoration: none;
        display:flex;
        justify-content:right;

      }
      .active{
      background-color: gray;
      color: white;
      }
      li a:hover {
        background-color: orange;
        color: white;
      }
</style>
</html>

