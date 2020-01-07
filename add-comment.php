<?php
function OpenCon(){
 $dbhost = "localhost";
 $dbuser = "localhost";
 $dbpass = "localhost";
 $db = "companies";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
}

function CloseCon($conn)         {
 $conn -> close();
 }
 $conn = OpenCon();

$text = $_POST['text'];

  $sqlquery = "INSERT INTO comments (text) VALUES ('".$text."');";

  if ($result = mysqli_query($conn, $sqlquery)){
    header("Location: index.php");
  }

?>
