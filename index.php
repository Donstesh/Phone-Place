<?php 
include('navbar.php');

  session_start(); 
  
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Phone Place</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<button style="font-size:22px; border-radius:5px;background-color:black">
		<p style="color: white; font-size:18px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></button>
    <?php endif ?>
</div>
	<div class="home">
		<h1>About us</h1>
		<p>Phone place is the leading mobile seller in East Africa. <br> We do deliveries across all the 7 East African countries <br>
	Kenya, Uganda, Rwanda, Burundi,South Sudan,Drc Congo and Somalia</p>
	</div>
	
	<div class="image">
	<img src="home.png">
	</div>

	
<style>
	
	.header h2{
		text-align: center;
	    color:blueviolet;
		background-color: black;
	}
    .content{
	  text-align:right;
	  padding-right: 10px;
	  padding-top: 0px;
	}
	.home{
		float: left;
		padding-top: 70px;
	}
	.home h1{
		font-size: 28px;
	}
	.home p{
		font-size: 18px;
	}
	.image{
		float: right;
		width: 100%;
		height: 70px;
		padding-top: 70px;
	}
</style>
</body>
</html>