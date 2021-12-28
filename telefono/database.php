<?php

$connessione = mysqli_connect("localhost", "root", "", "rubrica");

if (mysqli_connect_errno()) {
    echo "errore connessione";
    die();
}