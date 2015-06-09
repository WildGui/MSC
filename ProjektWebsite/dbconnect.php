<?php
/*Datenbankverbindung herstellen, falls Probleme Fehlermeldung*/
$db =mysqli_connect ("127.0.0.1", "root","","halloffame");
if(!$db)
{
	exit("Verbindungsfehler:".mysqli_connect_error());
}
/*Abfrage aus der DB*/

$jahrgang = $_POST['jahrgang'];
$name = $_POST['vorname'];
$vorname = $_POST['nachname'];

$eintrag = "INSERT INTO bestenliste (name,vorname,jahrgang)
			VALUES('$name','$vorname','$jahrgang')";
			
$eintragen =mysqli_query($db,$eintrag);

if($eintragen == true)
{
	echo "Eintrag war erfolgreich";
}
else
{
	echo "Fehler beim Speichern";
}



/*Aus Datenbank Daten lesen und in Variable schreiben */

$ergebnis = mysqli_query($db,"SELECT * FROM bestenliste");  
while($row = mysqli_fetch_object($ergebnis))
{
	echo $row->id;
	echo "<br />";
	echo $row->name;
	echo "<br />";
	echo $row->vorname;
	echo "<br />";
	echo $row->jahrgang;
	echo "<br />";
}
?>

