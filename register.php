<?php
    include('navbar.php');
session_start();
   include("connection.php");
   include("functions.php");


?>

<html>
    <head>
        <title>SignUp</title>
    </head>
    <body>
      
    <div class="container">  
      <form  id="contact" action="mailto:denkogei24@gmail.com" method="post" enctype="text/plain" >
        <h2>Create your Account</h2>
        <fieldset>
          <input placeholder="Name" name="fullname"  type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input placeholder=" Email Address" name="Email" type="text" tabindex="2" required>
        </fieldset>
        <fieldset>
          <input placeholder="Enter your password" name="password"  type="password" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input placeholder="Re Enter your password" name="Reenter-password"  type="password" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
          <input placeholder=" Phone Number (optional)" name="phonenumber" type="phonenumber" tabindex="3" >
        </fieldset>
        <fieldset>

        <fieldset>
          <button  type="submit"  value="Signup" id="contact-submit" data-submit="...Sending" onclick="sendEmail()">Submit</button>
        </fieldset>
      </form>
    </div>

    </body>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  -font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="phonenumber"],
#contact input[type="url"],
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="phonenumber"],
#contact input[type="password"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: linear-gradient(45deg, rgb(156, 14, 156), midnightblue);
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: linear-gradient(45deg, rgb(156, 14, 156), midnightblue);
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

</style>
</html>
