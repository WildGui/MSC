<?php
//setcookie("meinerstercookie","felix",time()+(3600*24)); // Cookie wird gesetzt, er bleibt 24h erhalten

setcookie("Erster", "Das ist ein Test-Cookie");
//Werte aus Cookie lesen
echo $_COOKIE["Erster"];

?>