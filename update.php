<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST['dId'];
    $NAME = $_POST['dName'];
    $AGE = $_POST['dAge'];
    $EMAIL = $_POST['dMail'];
    $PASSWORD = $_POST['dPassword'];
    // echo "$ID <br>";
    // echo "$NAME <br>";
    // echo "$AGE <br>";
    // echo "$EMAIL <br>";
    // echo "$PASSWORD <br>";

    $sql = "UPDATE details SET dname='$NAME' ,dAge='$AGE', dMail='$EMAIL', dPassword='$PASSWORD' WHERE dId= '$ID'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "No Data Inserted";
    }
}
