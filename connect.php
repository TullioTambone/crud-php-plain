<?php

//connecting to my databse

//                 nome del server, nome user, password, nome database
$connection = new mysqli('localhost','root','root','db-pure-crud');

// se non c'è connessione interrompi l'esecuzione dello script
if(!$connection){
    die(mysqli_error($connection));
}