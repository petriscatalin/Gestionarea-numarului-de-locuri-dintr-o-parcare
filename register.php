<?php
include 'dbconfig/dbconfig.php';
use parking\DatabaseActions as DatabaseActions;
//preluare valori
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//conectare la server si baza de date
$databaseactions = new DatabaseActions();

//rezultat
$row = $databaseactions->selectData("select * from user where email='$email'");

if(mysqli_num_rows($row)>0){
    if (isset($_POST['Inregistrare'])) {
        if ($_POST['firstname'] == "" || $_POST['lastname'] == "" || $_POST['email'] == "" || $_POST['password'] == "" ) {
        } else {
        }
    }
    echo "Email-ul este deja folosit sau nu ati completat toate campurile!";
}else{
    $databaseactions->insertData("INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')");
}

?>