<?php
$con=mysqli_connect("localhost","root","","ecommerce");

//getting Categories

function getCat(){
	global $con;

 	$get_cats= "select * from Categories";
	$run_cats=mysqli_query($con,$get_cats);
 	while($row_cats=mysqli_fetch_array($run_cats)){

 		$cat_id=$row_cats['cat_id'];
 		$cat_title=$row_cats['cat_title'];

 	echo "<li style='list-style-type: none;
	display:block;'><a  style='text-decoration: none;font-family: sans-serif;padding: 4px;color:black;margin: 5px;font-size: 18px;' href='index.php?cat=$cat_id'>$cat_title </a> </li>";
 	}


 }

function getPro(){

	global $con;


	$get_pro="select * from product order by RAND() LIMIT 0,10";

	$run_pro =mysqli_query($con,$get_pro);

	while ($row_pro=mysqli_fetch_array($run_pro)) {

		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_img'];
	// 	$pro_id=$row_pro['product_id'];
	// 	$pro_id=$row_pro['product_id'];
	// 
		echo "
				<div style='float:left; margin_left:10px;padding:5px;'>
				<img src='admin_area/product_images/$pro_image' width='180' height='300' />
				<p><b>$ $pro_price</b></p>
				<a href='details.php?id=$pro_id'style='float:left;'>Details</a>
				<a href='all books.php?id=$pro_id'><button 'style='float:right;'>Add to cart</button></a>


				</div>


		";
	}

}


function getCatPro(){

	global $con;

	if(isset($_GET['cat'])){

		$cat_id=$_GET['cat'];



	$get_pro="select * from product where product_cat='$cat_id' ";

	$run_pro =mysqli_query($con,$get_pro);

	while ($row_pro=mysqli_fetch_array($run_pro)) {

		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_img'];
	// 	$pro_id=$row_pro['product_id'];
	// 	$pro_id=$row_pro['product_id'];
	// 
		echo "
				<div style='float:left; margin_left:10px;padding:5px;'>
				<img src='admin_area/product_images/$pro_image' width='180' height='300' />
				<p><b>$ $pro_price</b></p>
				<a href='details.php?id=$pro_id'style='float:left;color:white'>Details</a>
				<a href='all books.php?id=$pro_id'><button 'style='float:right;'>Add to cart</button></a>


				</div>


		";
	}
}

}







?>