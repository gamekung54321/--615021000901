<?php
    require_once("dbcon.php");
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
?>
<table style="width:100%;" border="1">
    <tr>
        <th>รหัสภาพยนต์</th>
        <th>ชื่อภาพยนต์</th>
        <th>วันที่เริ่มฉาย</th>
    </tr>
<?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['movie_id']; ?></td>
        <td><?php echo $row['movie_name']; ?></td>
        <td><?php echo $row['movie_date']; ?></td>
    </tr>
<?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
</table>