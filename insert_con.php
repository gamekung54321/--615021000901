<?php
    require_once("dbcon.php");
    $sql = "INSERT INTO movie (movie_id, movie_name, movie_date, name, pin)
    VALUES ('{$_POST['movie_id']}', '{$_POST['movie_name']}', '{$_POST['movie_date']}', '{$_POST['username']}', '{$_POST['pin']}')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
    <form action="insert.php" method="post">
        <button type="submit">กลับไปหน้าหลัก</button>
    </form
<?php
    $conn->close();
?>