<?php include 'header.php';
include 'connection.php';
?>

<?php
$sql = "SELECT * FROM details WHERE dId=" . $_GET['dId'];
$result = mysqli_query($conn, $sql) or die("unsuccessfull");
$row = mysqli_fetch_assoc($result);


?>


<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="update.php" method="post" enctype="multipart/form-data">
        <div class=" form-group">
            <label for="">Name</label>
            <input type="hidden" name="dId" value="<?php echo $row['dId']; ?>" />
            <input type="text" name="dName" value="<?php echo $row['dName']; ?>" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="dAge" value="<?php echo $row['dAge']; ?>" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="dMail" value="<?php echo $row['dMail']; ?>" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="dPassword" value="<?php echo $row['dPassword']; ?>" />
        </div>

        <div class="form-group">
            <img src="uploadImage/<?php echo $row['dImage']; ?>" width="40px" height="40px  ">
            <input type="hidden" name="old_Image" value="<?php echo $row['dImage']; ?>" />
        </div>


        <div class="form-group">
            <label>upload Image</label>
            <input name="dImage" class="imageUpload" type="file" /><br>
        </div>
        <input class="submit" type="submit" value="Update" />

    </form>

</div>
</div>
</body>

</html>