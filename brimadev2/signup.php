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
<html >
<head>
  <title>SIGNUP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href=>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>
<?php 
if (isset($_POST["submit"])) {
	echo "submit is set<br";
		$name1=  $_POST["first_name"];
		$name2 = $_POST["last_name"]; 
       	$email = $_POST["email"];
		$password1 = $_POST["password1"];
		$password2 = $_POST["password2"];
		if ($password1 != $password2 ) {
			# code...
			 // $error = 'The passwords you entered is not conforming';
			 // echo $error;
			echo "<script type='text/javascript'> alert('" . $error . "');</script>";
			// header('location: secondlogin.php');
			
		}	
		else{

			$password=$password2;
			$password= md5($password);
	        // $sql = "INSERT INTO myguests (firstname, lastname, email, password ) VALUES ('$name1', '$name2', '$email', '$password')";
	        // $test = $conn->query($sql);
	        $stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
			$stmt->bind_param("ssss", $firstname, $lastname, $email, $password);

			// set parameters and execute
			$firstname = $name1;
			$lastname = $name2 ;
			$email = $email;
			$password = $password;
			$stmt->execute();

	  //       echo "New record created successfully";
	  // 			if ($test === TRUE) {
			// }
		 // else {
	  //           // echo "Error: " . $sql . "<br>" . $conn->error;
			// 	echo "pls sign in";
	  //       }
			header('Location: login.php');
	}
}				


 ?> 

<div class="container">
  <div class="col-md-2">
    
  </div>
  
  <form class="col-md-8 " method="POST" action="">
  <strong><h1>SIGN UP</h1></strong>
  <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" name="first_name" placeholder="Firstname">
    </div>
    
    <br>
   <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" name="last_name" placeholder="Lastname">
    </div>
    
    <br>
   <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  type="email" class="form-control" name="email" placeholder="Email">
    </div>
    
    <br>  
   <!--  <div class="input-group">
      <span class="input-group-addon">Text</span>
      <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
    </div> -->
  
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" class="form-control" name="password1" placeholder="Password">
    </div>
    <br>
  <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
    <br>
    
    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
  </form>

 <!--  <p>It can also be used on the right side of the input:</p>
  <form>
    <div class="input-group">
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
    </div>
    <div class="input-group">
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    </div>
  </form>
</div> -->
  <div class="col-md-2">

  </div>
</body>
</html>


<?php 	
// header('location: login.php');
// $stmt->close();
$conn->close();  
 ?>
