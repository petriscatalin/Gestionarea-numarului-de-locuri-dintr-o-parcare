<?php
include 'dbconfig/dbconfig.php';
use parking\DatabaseActions as DatabaseActions;

//preluare valori
$date = $_POST['date'];
$from_date = $_POST['from'];
$to_date = $_POST['to'];
$email = $_POST['email'];

//conectare la server si baza de date
$databaseactions = new DatabaseActions();

//verificare rezervari existente
$row = $databaseactions->selectData("select * from rezervari where date='$date' && from_date>='$from_date' && to_date<='$to_date'");



if(mysqli_num_rows($row)>6){
    echo "Parcarea este plina, alege alt interval orar!!!";
    }else if(mysqli_num_rows($date)>0 && mysqli_num_rows($from_date)>0 && mysqli_num_rows($to_date)>0){
            echo "Locul este ocupat in acest interval orar!!!";
         }else{
                 $databaseactions->insertData("INSERT INTO rezervari (date,email, from_date, to_date) VALUES ('$date','$email', '$from_date', '$to_date')");
                 header("Location: index9.php");
         }


?>