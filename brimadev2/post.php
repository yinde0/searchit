<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p1DB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "sussesful";
}
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="blog.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<?php 
		if (isset($_POST["comment"])) {
			# code...
			echo "comment";
			header("location: bank.php");

		}
			$sql = "SELECT * FROM post" ;
		// if ($sql === FALSE) {
		// 	# code...
		// 	die("Connection failed: " . $conn->connect_error);
		// }else{
		// 	echo "connected sucessfully";
		// }

	      $result = $conn->query($sql);
	      
	      $count = $result->num_rows;
	      // $active = $row['active'];	      
	      // If result matched $myusername and $mypassword, table row must be 1 row
			
		         
		        // header("location: bank.php");
		      // }	
		        // else {
		//          $error = "Your Login Name or Password is invalid";
		//          echo "<script type='text/javascript'> alert('" . $error . "');</script>";
		//          // echo $error;
		//          // header("location: login.php");
		// }

		 ?>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		 
		      </button>
		      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="bank.php">Home</a></li>
		        
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		        <li><a href="login.php"><span class="glyphicon glyphicon-trash"></span> Delete Account</a></li>

		      </ul>
		    </div>	
		  </div>
		</nav>

			<div class="row">
				<div class="col-md-3 text-center">
					<div><img class="profile-user-img img-fluid img-circle" src="architecture-design-drone-427650.jpg" alt="User profile picture"></div>
					<div>
						<p>Post</p>
						<p>personal info</p>
						<p>life</p>
					</div>
				</div>
				<div class="col-md-9">
					
		      		<?php 
		      			while($row = $result->fetch_assoc()) {?>

					<div class="input-group">
		      
						  <!-- <input class="form-control form-control-sm" type="text" placeholder="" value=""> -->
						  <div class="panal-body">
		        		<?php  echo $row['article_name'].'<br>';?>
		        		<form action="" method="POST">
		        			
					      <span class="input-group-addon">Add comment</span>
					     <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
						  	
						  </div>
		        		</form>
			              	<button class="btn-btn-secondary text-center" name="comment">comment</button>
			              	<button class="btn-btn-secondary text-center" name="Delete">Delete</button>
			              	<button class="btn-btn-secondary text-center" name="Update">Update</button>

		      		<?php }
		      		 ?>
			          
			          
			          <br>
					</div>


				</div>
				<div class="">
					
				</div>
			</div>																																																					
	</body>
</html>]