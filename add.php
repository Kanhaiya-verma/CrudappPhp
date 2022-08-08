<?php include 'header.php';
include 'connection.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $sql = "INSERT INTO details(dId ,dName,dAge,dMail,dPassword) 
     VALUES('','$Name','$Age','$Email','$Password')";
    // print_r(mysqli_query($conn, $sql));
    // die;

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
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

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
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>



</html>