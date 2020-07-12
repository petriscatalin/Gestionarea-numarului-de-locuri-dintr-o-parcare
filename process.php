<?php
// Start the session
session_start();
?>

<?php
include 'dbconfig/dbconfig.php';
use parking\DatabaseActions as DatabaseActions;
//preluare valori
$email = $_POST['email'];
$password = $_POST['password'];

//conectare la server si baza de date
$databaseactions = new DatabaseActions();

$email = stripcslashes($email);
$password = stripcslashes($password);

//rezultat
$result = $databaseactions->selectData("select * from user where email='$email' and password='$password'");
$row = mysqli_fetch_array($result);
if($row['email']==$email && $row['password']==$password){
    if (isset($_POST['Autentificare'])) {
        if ($_POST['email'] == "" || $_POST['parola'] == "" ) {
        } else {
        }
    }    
    header("Location: index6.php");
}else{
    echo "Parola este gresita sau nu ati completat toate campurile!";
}


?>


<?php
$_SESSION["email"] = $email;
?>