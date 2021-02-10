<?php
    require_once("dbcon.php");
    if(isset($_GET['delete'])) {
        $sql = "DELETE FROM movie WHERE movie_id = '{$_GET['id']}'";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    $sql = "SELECT * FROM movie";
    if(isset($_GET['search_click'])) {
        $sql = "SELECT * FROM movie WHERE movie_id LIKE '%{$_GET['search']}%' OR movie_name LIKE '%{$_GET['search']}%'";
        echo "<p>คุณกำลังค้นหา : {$_GET['search']}</p>";
    }
    $result = $conn->query($sql);
?>
<form action="." method="get">
    <label for="search">ช่องค้นหา</label>
    <input type="text" name="search" id="search" placeholder="ค้นหา">
    <button type="submit" name="search_click">ค้นหา</button>
</form>
<form action="." method="post">
    <button type="submit" name="logout">ออกจากระบบ</button>
</form>
<a href="insert.php">เพิ่มรายการภาพยนต์</a>
<table style="width:100%;" border="1">
    <tr>
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>วันที่เริ่มฉาย</th>
        <th>เครื่องมือ</th>
    </tr>
<?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['movie_id']; ?></td>
        <td><?php echo $row['movie_name']; ?></td>
        <td align="center"><?php echo $row['movie_date']; ?></td>
        <td align="center">
            <a href="update.php?id=<?php echo $row['movie_id']; ?>">แก้ไข</a>
            <a href="?delete=1&id=<?php echo $row['movie_id']; ?>">ลบ</a>
        </td>
    </tr>
<?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
</table>