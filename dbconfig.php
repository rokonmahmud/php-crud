

<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "university";

$con = mysqli_connect($host, $user, $password, $db);

if(!$con){

    die("Database connection failed: " . mysqli_connect_error());
};

?>

