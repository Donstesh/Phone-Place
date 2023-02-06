<?php
    include('navbar.php');
include 'protect.php';
    session_start();
?>


<form action="/add-listing" method="POST" enctype="multipart/form-data">
    <h3>Upload Item</h3>
    <label>Title:</label>
    <input type="text" name="title">
    <label>Description:</label>
    <input type="text" name="description">
    <label>Price:</label>
    <input type="number" name="price">
    <label>Phone Number:</label>
    <input type="number" name="phonenumber">
    <label>Location:</label>
    <input type="text" name="location">
    <label>Images:</label>
    <input type="file" name="product-image" id="" multiple>
    <input type="submit" class="btn btn-primary">
</form>