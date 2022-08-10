<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ID = $_POST['dId'];
    $NAME = $_POST['dName'];
    $AGE = $_POST['dAge'];
    $EMAIL = $_POST['dMail'];
    $PASSWORD = $_POST['dPassword'];


    if (isset($_FILES['dImage']) && $_FILES['dImage']['name']) {
        $file_name = $_FILES['dImage']['name'];
        $file_type = $_FILES['dImage']['type'];
        $file_tmp_name = $_FILES['dImage']['tmp_name'];
        $file_size =  $_FILES['dImage']['size'];

        $fileext = explode('.', $file_name);
        $fileCheck = strtolower(end($fileext));
        $fileStore = array("png", "jpg", "jpeg");
        if (in_array($fileCheck, $fileStore)) {
            move_uploaded_file($file_tmp_name, "uploadImage/" . $file_name);
        } else {
            echo "No Data Inserted";
        }
    } else {
        $file_name = $_POST['old_Image'];
    }
    $sql = "UPDATE details SET dname='$NAME' ,dAge='$AGE', dMail='$EMAIL', dPassword='$PASSWORD', dImage='$file_name' WHERE dId= '$ID'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "No Data Inserted";
    }
}
