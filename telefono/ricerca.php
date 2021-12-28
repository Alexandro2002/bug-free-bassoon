<?php
session_start();
include 'database.php';
$name=$_POST['name'];



$SQL="SELECT  nome,numero from contatto where nome='$name'";

if ($connessione->query($SQL) === TRUE) {
    echo "nuovo record inserito! a  breve verrai reindirizzato nell'area  home";

    echo "<a href='index.html'> <h7>home</h7>";

} else {
    echo "error: " . $SQL . "\n" . $connessione->error;
}

$connessione->close();


