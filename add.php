<?php include 'header.php';
include 'connection.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_FILES['upload'])) {
        $file_name = $_FILES['upload']['name'];
        $file_type = $_FILES['upload']['type'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_size =  $_FILES['upload']['size'];

        $fileext = explode('.', $file_name);
        $fileCheck = strtolower(end($fileext));
        $fileStore = array("png", "jpg", "jpeg");
        if (in_array($fileCheck, $fileStore)) {
            move_uploaded_file($file_tmp_name, "uploadImage/" . $file_name);
        }
    }
    $IMAGE = $_POST['upload'];
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $sql = "INSERT INTO details(dId ,dName,dAge,dMail,dPassword,dImage) 
     VALUES('','$Name','$Age','$Email','$Password','$file_name')";
    $result = mysqli_query($conn, $sql) or die("data Error");

    if ($result) {
        header("Location: index.php");
    } else {
        echo "No Data Inserted";
    }
}


?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number" name="age" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" />
        </div>

        <div class="form-group">
            <label>upload Image</label>
            <input name="upload" class="imageUpload" type="file" /><br>
        </div>

        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>



</html>