<?php include 'header.php';
include 'connection.php';
?>
<?php

$sql = 'DELETE FROM details WHERE dId =' . $_GET['dId'];
$result = mysqli_query($conn, $sql) or die("data Error");
if ($result) {
    header("Location: index.php");
}
mysqli_close($conn);
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER = ['PHP_SELF']; ?>">
        <div class="form-group">
            <label name="dId">Id</label>
            <input type="text" name="dId" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>