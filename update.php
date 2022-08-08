<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST['dId'];
    $NAME = $_POST['dName'];
    $AGE = $_POST['dAge'];
    $EMAIL = $_POST['dMail'];
    $PASSWORD = $_POST['dPassword'];
    

    $sql = "UPDATE details SET dname='$NAME' ,dAge='$AGE', dMail='$EMAIL', dPassword='$PASSWORD' WHERE dId= '$ID'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "No Data Inserted";
    }
}
