<?php 
$connect = mysql_connect("localhost","root","",'firstname');

// $db= mysql_select_db('firstname', $connect);
// if (!$db) {
// 	# code...
// 	echo 'fail';
// }
// else{
// 	echo "connected";
// }
if (isset($_POST["submit"])) {

	# code...	
	// $name = $_POST["name"];
	$email = $_POST["email"];
	$name2 = $_POST["name2"]; 
	$name1=  $_POST["name"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password1"];		
} 
$sql = "INSERT INTO user (id, name, name1, email, password1 ) VALUES ('',$name1', '$name2', '$email', '$password1')";

if (mysql_query($sql,$connect)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($connect);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <p>welcome <?php  echo$name ?><br>
your email is <?php echo$email ?></p> -->

</body>
</html>
