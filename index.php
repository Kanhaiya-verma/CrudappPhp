<?php
include 'header.php';
include 'connection.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php

    // echo "Connected successfully";

    $sql = "SELECT * FROM details";
    // echo "$sql";

    $result = mysqli_query($conn, $sql) or die("data Error");

    if (mysqli_num_rows($result) > 0) {
    ?>

        <table cellpadding="7px">
            <thead>
                <th>Roll_No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['dId']; ?></td>
                        <td><?php echo $row['dName']; ?></td>
                        <td><?php echo $row['dAge']; ?></td>
                        <td><?php echo $row['dMail']; ?></td>
                        <td><?php echo $row['dPassword']; ?></td>
                        <td>
                            <a href='edit.php?dId= <?php echo $row['dId']; ?>'>Edit</a>

                            <a href='delete.php?dId= <?php echo $row['dId']; ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } else {
        echo "<h2>No record Found</h2>";
    } ?>
</div>
</div>
</body>

</html>