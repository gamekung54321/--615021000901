<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    $num = 1;
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $num = ++$num;
        }
    }
?>
<form action="insert_con.php" method="post">
    <label for="movie_id">รหัสภาพยนต์ : </label>
    <?php echo $num; ?>
    <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $num; ?>" >
    <br>
    <label for="movie_name">ชื่อภาพยนต์</label>
    <br>
    <input type="text" name="movie_name" id="movie_name">
    <br>
    <label for="movie_date">วันที่เริ่มฉาย</label>
    <br>
    <input type="date" name="movie_date" id="movie_date">
    <br>
    <br>
    <button type="submit">ยืนยัน</button>
</form>
<a href="table1.php">กลับไปหน้าหลัก</a>