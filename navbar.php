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
    <li><a href="#">Products</a></li>
    <li><a href="#">Sell</a></li>
    <li><a href="#">Contact Seller</a></li>
    <li><a href="#">Sign Up</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">Logout</a></li>
    </ul>

    </body>
    <style>
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

