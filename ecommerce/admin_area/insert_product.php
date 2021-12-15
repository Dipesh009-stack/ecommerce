<!DOCTYPE html>
<?php

include("includes/db.php");




?>
<html>
<head>
	<title>inserting product</title>
	<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script> -->
</head>
<body>
	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="700px" border="2" bgcolor="">
			<tr align="center">
				<td colspan="7"><h1>Insert new product</h1></td>
			</tr>	

			<tr>
				<td align="right"><b>Product title<b></td>
				<td><input type="text" name="product_title" required></td>
			</tr>	

			<tr>
				<td align="right"><b>product Category</b></td>
				<td>
					<select name="product_cat" required>
						<option>select a category</option>
						<?php

	$get_cats= "select * from Categories";
	$run_cats=mysqli_query($con,$get_cats);
	while($row_cats=mysqli_fetch_array($run_cats)){

		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];

	echo"<option value='$cat_id'>$cat_title</option>";
	}




						?>
					</select>

				</td>
			</tr>	

			<tr>
				<td align="right"><b>Product Image</b></td>
				<td><input type="file" name="product_image" required></td>
			</tr>	

			<tr>
				<td align="right"><b>Product Price</b></td>
				<td><input type="text" name="product_price" required></td>
			</tr>	

			<tr>
				<td align="right"><b>Product Description</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>	
			<tr>
				<td align="right"><b>Product Keywords</b></td>
				<td><input type="text" name="product_keywords" required></td>
			</tr>	


			<tr>
				
				<td colspan="7" align="center"><input type="submit" name="insert_post" value="Insert product"></td>
			</tr>				


		</table>
		

	</form>
	





</body>
</html>

<?php

    if(isset($_POST['insert_post'])) {

    	
    	// getting the text data from the fields

    	$product_title=($_POST['product_title']);
    	$product_cat=($_POST['product_cat']);
    	$product_price=($_POST['product_price']);
    	$product_desc=($_POST['product_desc']);
    	$product_keywords=($_POST['product_keywords']);

    	//getting images from the field
    	$product_image=$_FILES["product_image"]["name"];
    	$product_image_tmp=$_FILES["product_image"]["tmp_name"];

    	move_uploaded_file($product_image_tmp,"product_images/$product_image");


    	  $insert_prodct = "INSERT INTO product(product_cat,product_title,product_price,product_desc,product_keywords,product_img) VALUES('$product_cat','$product_title','$product_price','$product_desc','$product_keywords','$product_image')";

    	 $insert_pro=mysqli_query($con, $insert_prodct);

    	 if($insert_pro){
     	 echo "<script> alert('product has been inserted!')</script>";
      	 echo "<script>window.open('insert_product.php','_self')</script>";
       }
    }


?>