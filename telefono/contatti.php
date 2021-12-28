<?php
session_start();
include 'database.php';
$name=$_POST['name'];
$tell=$_POST['tell'];

echo "il nome  è".'<br>'. $name .'<br>';
echo "il numero".'<br>'.$tell.'<br>';



$SQL = "INSERT INTO contatto (nome, numero) VALUE ('$name','$tell')";

if ($connessione->query($SQL) === TRUE) {
    echo "nuovo record inserito! a  breve verrai reindirizzato nell'area  home";

    echo "<a href='index.html'> <h7>home</h7>";

} else {
    echo "error: " . $SQL . "\n" . $connessione->error;
}

$connessione->close();

