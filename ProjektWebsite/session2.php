<?php
session_start();
if(isset($_SESSION["username"])){
?> 
<html> 
	<head>
		<title>MeinSEX</title>
	</head>
	
	<body>
	<h1> Hallo<?php echo $_SESSION["username"];?></h1>
	<a href="logoutsession.php">Ausloggen</a>
	</body>
</html>











<?php	
} else {
?>
Bitte erst einloggen, <a href="session.php">hier</a>.
<?php
}
?>