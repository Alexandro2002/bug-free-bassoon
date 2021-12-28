<?php
include "database.php";
$name=$_POST['name'];

$SQL = "DELETE FROM contatto WHERE nome = '$name'";


if ($connessione -> query($SQL) === TRUE) {
    echo "eliminato record selezionato!";
    header("Refresh:5; url=index.html");
} else {
    echo "error: " . $SQL . "\n" . $connessione->error;
}

$connessione->close();

