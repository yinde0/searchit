 <?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p1DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
	$data = $_POST["uip"];
	$password = $_POST["password"];

	$password= md5($password);
	// password_verify($password)
	
		   

		$sql = "SELECT * FROM myguests WHERE email = '$data' and password = '$password' and name" ;
		// if ($sql === FALSE) {
		// 	# code...
		// 	die("Connection failed: " . $conn->connect_error);
		// }else{
		// 	echo "connected sucessfully";
		// }

	      $result = $conn->query($sql);
	      $row = $result->fetch_assoc();
	      $count = $result->num_rows;
	      $active = $row['active'];	      
	      // If result matched $myusername and $mypassword, table row must be 1 row
			
		      if($count == 1) {
		         // session_register("myusername");
		        echo $row[2];
		         
		        header("location: bank.php");
		      }else {
		         $error = "Your Login Name or Password is invalid";
		         echo "<script type='text/javascript'> alert('" . $error . "');</script>";
		         // echo $error;
		         // header("location: login.php");
		}

}

$conn->close();
?> 