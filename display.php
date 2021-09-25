<?php
include 'connect.php'; 
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud operation</title>
	 <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
</head>
<body>
<div class="container">
<button class = "btn btn-primary my-5"><a href = "user.php" class = "text-light"> Add User </a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">I'd</th> 
      <th scope="col">Name</th>
      <th scope="col">Std</th>
      <th scope="col">Mobile</th>
	  <th scope="col">City</th>
	  <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  
<?php
	  $sql="select * from `crud`";
	  $result = mysqli_query($con, $sql);
	  if($result){
		  
		  while($row = mysqli_fetch_assoc($result)){
			  $id = $row["I'd"];
			  $name = $row['Name'];
			  $std = $row['STD'];
			  $mobile = $row['Mobile'];
			  $city = $row['City'];
			  echo '<tr>
					<th scope = "row">'.$id.'</th>
				    <td>'.$name.'</td>
				    <td>'.$std.'</td>
				    <td>'.$mobile.'</td>
				    <td>'.$city.'</td>
					 <td>
						<button class = "btn btn-primary"><a href ="update.php? update='.$id.'" class = "text-light"> update </a></button>
						<button class = "btn btn-danger"><a href="delete.php? delete = '.$id.'" class = "text-light"> Delete </a></button> 						
					</td>
   
				</tr>';
		   }
		}
  
?>
  
  </tbody>
</table>
</div>

</body>
</html>	