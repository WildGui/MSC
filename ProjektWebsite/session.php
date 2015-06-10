<?
session_start();

//$username = $_POST['user'];
//$password = $_POST['password'];


$_SESSION["Username"] = $username;
$_SESSION["password"] = $password;

echo "Hallo",$_SESSION["erstertest"],"!";

?>