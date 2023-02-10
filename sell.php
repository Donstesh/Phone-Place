<?php
  include('navbar.php');
  include('connection.php');

   


    $query = "INSERT INTO phones (category, title, description, price, phonenumber, location, image_path)
    VALUES('category', 'title', 'description', 'price', 'phonenumber', 'location', 'image_path')";
  
  ?>
 

<!DOCTYPE html>
<html>
<body>
  <div class="header">
  	<h2>Add Phone</h2>
  </div>
	
  <form method="post" action="sell.php">
  <h3>Upload Phone</h3>
  <div class="input-group">
  <select style="
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;" class="input-el" name="category" id="category" required>
    <option value="">---Choose Phone Model---</option>
    <option value="huawei">Huawei</option>
    <option value="samsung">Samsung</option>
    <option value="infinix">Infinix</option>
    <option value="tecno">Teno</option>
    <option value="redmi">Redmi</option>
    <option value="realme">Realme</option>
    <option value="iphone">Iphone</option>
    <option value="oppo">Oppo</option>
      </select>
  </div>
    <div class="input-group">
        <label>Title:</label>
        <input type="text" name="title"><br>
    </div>
    <div class="input-group">
        <label>Description:</label>
        <input type="text" name="description"><br>
    </div>
    <div class="input-group">
        <label>Price:</label>
        <input type="number" name="price"><br>
    </div>
    <div class="input-group">
        <label>Phone Number:</label>
        <input type="number" name="phonenumber"><br>
    </div>
    <div class="input-group">
        <label>Location:</label>
        <input type="text" name="location"><br>
    </div>
    <div class="input-group">
        <label>Images:</label>
        <input type="file" name="product-image" id="upload" multiple><br>
    </div>
        <input type="submit" class="btn btn-primary">
  </form>

<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 100%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
  </style>