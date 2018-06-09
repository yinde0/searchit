<?php
class DbConnection
{
    protected $conn = null;
    public function OpenCon()
    {
    	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "p1DB";
        $this->conn = new mysqli($servername, $username, $password, $dbname) or die($conn->connect_error);
        return $this->conn;
    }
    public function CloseCon()
    {
        $this->conn->close();
    }
}
// function OpenCon() {
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "";
// 	$dbname = "p1DB";
	// $conn = new mysqli($servername, $username, $password, $dbname);
// 	if ($conn->connect_error) {
// 	    die("Connection failed: " . $conn->connect_error);
// 	} 
// 	else{
// 		echo "sussesful";
// 	}
// }
// first create a new class Post and a constructor that will handle database connectivity
	class Post
	{
    protected $db = null;
    public function __construct(){
        $this->db = new DbConnection();
    }
 // a new function which will handle new post request and save it to the database.	
   public function insertpost($a_name){

       $con     = $this->db->OpenCon();
       $title   = $con->real_escape_string($a_name);
       // $content = $con->real_escape_string($a_content);
       // $img     = $con->real_escape_string($imgname);
       $query   = $con->prepare("INSERT INTO post(article_name) VALUES(?)");
       $query->bind_param("s", $title);
       $result = $query->execute();
       if (!$result) {

           $error = $con->error;

           $this->db->CloseCon();
           return $error;
       }
       $result = true;
       return $result;
   }
    // create a function which will get the post in order to view it
   public function getarticle($articleid)
    {
        $con = $this->db->OpenCon();
        $stmt = "SELECT article_name,date from post WHERE article_id = '$articleid'";
        $result = $con->query($stmt);
        if ($result->num_rows == 1) {
            $sql = $result;
        } else {
            $sql = "No article";
        }
        $this->db->CloseCon();
        return $sql;
    }
    // editing and updating a post is a common activity
    public function updatearticle($a_id, $a_content)
   {

       $con     = $this->db->OpenCon();
       $title   = $con->real_escape_string($a_name);
       // $content = $con->real_escape_string($a_content);
       // $img     = $con->real_escape_string($imgname);
       $query   = $con->prepare("UPDATE post SET article_name = ? WHERE article_id = ?");
       $query->bind_param("sssi", $title, $a_id);
       $result = $query->execute();
       if (!$result) {
           $error = $con->error;

           $this->db->CloseCon();
           return $error;
       }
       $result = true;
       return $result;

   }

// Delete Post function takes a single parameter
   public function deletearticle($id)
    {

        $con    = $this->db->OpenCon();
        $sql    = "DELETE FROM post WHERE article_id = '$id'";
        $result = $con->query($sql);

        if (!$result) {

            $error = $con->error;

            $this->db->CloseCon();
            return $error;
        }
        $result = true;
        return $result;
    }

	
}

?>