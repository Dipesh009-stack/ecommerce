<!DOCTYPE html>

<?php 


include("admin_area/includes/db.php");

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bookies</title>
	<link rel="stylesheet" type="text/css" href= "styles/styles.css"  media="all"/> 
</head>
<body>
	<center>
	<div class="main">
	<!-- header -->
		<div class="header_wrapper">
			<img  src="images/logo.jpg" height="80" width="100">
			<img src="images/banner3.jpg"  style="float: right; height: 80px; width: 900px;"> 
		</div>
	<!-- header end menubar starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="categories.php">Categories</a></li>
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
				<input type="searchbox" name="searchpro" placeholder="search for books..." >
				<input type="submit" name="search" value="Find">
				
			</form>
		</div>
		<!-- search box ends here and content starts here -->

		<div  style="width: 1000px; height:800px; margin: auto; background: grey;">
			<div style="text-align: center; margin-left: 30px; margin-bottom: 5px;background: grey;">
				<?php


				if(isset($_GET['search'])) {

					$search_query=$_GET['searchpro'];

				$get_pro="select * from product where product_keywords like '%$search_query%'";

				$run_pro =mysqli_query($con,$get_pro);

				while ($row_pro=mysqli_fetch_array($run_pro)) {

					$pro_id=$row_pro['product_id'];
					$pro_price=$row_pro['product_price'];
					$pro_image=$row_pro['product_img'];

					$pro_desc=$row_pro['product_desc'];
					
				echo "
				
				<div style='float:auto; margin_left:10px;padding:5px;'>
				<img src='admin_area/product_images/$pro_image' width='180' height='300' />
				<p><b>$ $pro_price</b></p>
	
				<a href='details.php?id=$pro_id'style='float:auto;'>details</a>
				<a href='all books.php?id=$pro_id'><button 'style='float:right;'>Add to cart</button></a>


				</div>
				";
			}
			}

				?>

			
			</div>
		</div>

		
		<div id="footer">

		  <center> <footer style="margin:auto; padding: 8px;">
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