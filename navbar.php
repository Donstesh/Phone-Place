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
    <li><a href="products.php">Phone Place</a></li>
    <li  style="padding-left:500px;"><a href="sell.php">Sell</a></li>
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
        background: linear-gradient(45deg, rgb(156, 14, 156), midnightblue);
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
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

