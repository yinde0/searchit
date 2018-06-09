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

	if (isset($_POST["submit"])) {
		# code...
		$a_name=  $_POST["content"];
		echo $a_name;
			        $stmt = $conn->prepare("INSERT INTO post (article_name) VALUES (?)");
			$stmt->bind_param("s", $firstname);

			// set parameters and execute
			$firstname = $a_name;
			$stmt->execute();

	  // 			if ($stmt === TRUE) {
	  //       echo "New record created successfully";
			// }
		 // else {
	  //           echo "Error: " . $sql . "<br>" . $conn->error;
			// // 	echo "pls sign in";z
	  //       }
		// 	header('Location: login.php');

		header('location: post.php');

		}

	 ?>
	 <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
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
				<div class="col-md-6">
					
			          <div class="card card-outline card-info">
			            <div class="card-header">
			              <h3 class="card-title">
			                Add comment
			                <small>Simply</small>
			              </h3>
			              <!-- tools box -->
			              <!-- /. tools -->
			            </div>
			            <!-- /.card-header -->
			            <div class="card-body pad">
			              <div class="mb-3" >
			              	<form action="" method="POST">
			              		
			                <textarea class="textarea" placeholder="Place some text here" name="content"
			                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
			              	<button class="btn-btn-secondary" name="submit">Post</button>
			              	</form>
			              </div>
			              <!-- <p class="text-sm mb-0">
			                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
			                information.</a>
			              </p> -->
			              <div class="card-tools">
			              	<br>

			              </div>
			            </div>
			          </div>
			          <br>
					<div class="input-group">
					      <span class="input-group-addon">Add comment</span>
					      <!-- <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info"> -->
						  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
					</div>
			              	<button class="btn-btn-secondary text-center" name="post">Submit</button>


				</div>
				<div class="col-md-3">
					
				</div>
			</div>																																																					
	</body>
</html>