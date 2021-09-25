<?php
include 'connect.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$std = $_POST['Std'];
	$Mobile = $_POST['Mobile'];
	$city = $_POST['City'];
	$sql = "insert into `crud`(name, std, mobile, city) values('$name', '$std', '$Mobile', '$city')";
	$result = mysqli_query($con, $sql);
	if($result){
		//echo 'Data inserted successfully';
		header('location: display.php');
	}else{
		die(mysqli_error($con));
	}	
}		
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"

  </head>
  <body>
     <div class = "container my-5">
	 <div><br>
		<form method = "post">
		  <div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" placeholder = "Enter your name" name = "name" autocomplete = "off">
			</div><br>
			<div class="form-group">
				<label>Std</label>
				<input type="text" class="form-control" placeholder = "Enter your Std" name = "Std" autocomplete = "off">
			</div><br>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" class="form-control" placeholder = "Enter your Mobile" name = "Mobile" autocomplete = "off">
			</div><br>
			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control" placeholder = "Enter your City" name = "City" autocomplete = "off">
			</div><br>
			
		  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
	 </div>
	</body>
</html>