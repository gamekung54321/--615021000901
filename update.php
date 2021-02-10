<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie WHERE movie_id = '{$_GET['id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>
<h3>แก้ไขรายการภาพยนต์ <small><a href="table.php">กลับไปหน้าหลัก</a></h3>

<form action="update_con.php" method="post">
    <label for="movie_id">รหัสภาพยนต์ : </label>
    <?php echo $row['movie_id']; ?>
    <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $row['movie_id']; ?>">
    <br>
    <label for="movie_name">ชื่อภาพยนต์ : </label>
    <br>
    <input type="text" name="movie_name" id="movie_name" value="<?php echo $row['movie_name']; ?>">
    <br>
    <label for="movie_date">วันที่เริ่มฉาย : </label>
    <br>
    <input type="date" name="movie_date" id="movie_date" value="<?php echo $row['movie_date']; ?>">
    <br><br>
    <button type="submit">ยืนยัน</button>
</form>