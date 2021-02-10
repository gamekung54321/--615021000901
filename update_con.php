<?php
    require_once("dbcon.php");
    $sql = "UPDATE movie SET
            movie_name = '{$_POST['movie_name']}',
            movie_date = '{$_POST['movie_date']}'
            WHERE movie_id = '{$_POST['movie_id']}' ";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
    <form action="." method="post">
        <button type="submit">กลับไปหน้าหลัก</button>
</form>
<?php
    $conn->close();
?>
