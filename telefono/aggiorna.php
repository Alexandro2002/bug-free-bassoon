<?php
include 'database.php';
$name=$_POST['name'];
$tell=$_POST['tell'];

$SQL= "UPDATE contatto set numero , nome  where nome='$name' and numero ='$tell'";


if ($connessione -> query($SQL) === TRUE) {
    echo "aggiornato record selezionato!";
    header("Refresh:5; url=index.html");

    echo "il nome  aggiornato".'<br>'. $name .'<br>';
    echo "il numero  aggiornato ".'<br>'.$tell.'<br>';

} else {
    echo "error: " . $SQL . "\n" . $connessione->error;
}

$connessione->close();