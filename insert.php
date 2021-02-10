<?php
    require_once("dbcon.php");
?>
<form action="insert_con.php" method="post">
    <label for="movie_id">รหัสภาพยนต์</label>
    <br>
    <input type="text" name="movie_id" id="movie_id">
    <br>
    <label for="movie_name">ชื่อภาพยนต์</label>
    <br>
    <input type="text" name="movie_name" id="movie_name">
    <br>
    <label for="movie_date">วันที่เริ่มฉาย</label>
    <br>
    <input type="date" name="movie_date" id="movie_date">
    <br>
    <label for="name">ชื่อผู้ใช้งาน</label>
    <br>
    <input type="text" name="username" id="username">
    <br>
    <label for="pin">รหัส PIN 4ตัว</label>
    <br>
    <input type="text" name="pin" id="pin">
    <br>
    <br>
    <button type="submit">ยืนยัน</button>
</form>
<form action="table.php" method="post">
    <button type="submit">หน้ารายการภาพยนต์</button>
</form>