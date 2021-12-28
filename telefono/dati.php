<?php
session_start();
include 'database.php';

$SQL ="SELECT * FROM contatto";


$res=$connessione->query($SQL);

$i=1;
if($res->num_rows>0){

    while($row=$res->fetch_assoc()){


        echo "nome: ".$row['nome']."<br>";
        echo "numero: ".$row['numero']."<br>";

        $i++;
    }
    echo "<a href='index.html'> <h7>home</h7>";

}else{
}
$connessione->close();