<!DOCTYPE html>

<?php
include("functions/function.php");

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bookies</title>
	<link rel="stylesheet" type="text/css" href= "styles/styles.css"  media="all"/> 
	<style type="text/css">
		.dropdown{
			width:auto; height:auto; float: left; position: relative;display:block;
		}
		.dropbtn {
			width: 160px;
		  background-color: #4CAF50;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		  cursor: pointer;
		}
		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}
		.dropdown:hover .dropdown-content {
		  display: block;
		}
	</style>
</head>
<body>
	<center><div class="main">
	<!-- header -->
		<div class="header_wrapper">
			<img  src="images/logo.jpg" height="80" width="100">
			<img src="images/banner3.jpg"  style="float: right; height: 80px; width: 900px;"> 
		</div>
	<!-- header end menubar starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<!-- <li><a href="categories.php">Categories</a></li> -->
				<li><a href="all books.php">All Books</a></li>
				<li><a href="#footer" target="_parent">About US</a></li>
				<li><a href="#">Cart</a></li>
				<li style="float: right;"><a href="#">Login</a></li>
				<li style="float: right"><a href="#">Sign Up</a></li>
			</ul>
		</div>

		<!-- menubar ends here and search box starts -->
		<div id="searchbox">
					  
			<form action="results.php" method="get" enctype="multipart/dorm-data"> 
				<input type="searchbox" name="search_query" placeholder="search for books..." >
				<input type="submit" name="search" value="Find">
				
			</form>
		</div>
		<!-- search box ends here and content starts here -->

		<div style="height: 800px; width: 1000px; background-image:url(images/b11.jpg); background-repeat: no-repeat; background-size: 1000px 800px; ">

			<!-- <img src="images/book1.jpg" width="1000px" height="800px"> -->

			<div  class='dropdown'>
			<button class="dropbtn">Categories</button>
			 <div class="dropdown-content"><?php    getCat();     ?></div>
			</div>
			<div style="height: auto; width: auto; position: relative;">
				<?php getCatPro();?> 
				
			</div>


		</div>

		
		<div id="footer">

		  <center> <footer style="margin: auto; padding: 8px;">
		  							&copy; 2019 &nbsp;@info.bookies.com<br>
		  	           <img src="images/home.jfif" height="20px" width="20px"> &nbsp;Sinamangal-Kathmandu<br>
		  	           <img src="images/call.jpg" height="20px " width="20px"> &nbsp; 01-4443322 
		           </footer>
		  </center>
			
		</div>
	</div>
</center>


</body>
</html>