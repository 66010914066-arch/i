<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชนิกานต์ ขำสระน้อย (ปุ้ม)</title>
</head>

<body>
<h1>ข้อมูลภาค -- ชนิกานต์ ขำสระน้อย (ปุ้ม)</h1>

<form method="post" action="">
    ชื่อภาค 
    <input type="text" name="rname" autofocus required>
    <input type="submit" name="Submit" value="บันทึก">
</form>

<br><br>

<?php
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");

    $rname = $_POST['rname'];
    $sql2 = "INSERT INTO regions (r_name) VALUES ('$rname')";
    mysqli_query($conn, $sql2) or die("insert ไม่ได้");
}
?>

<table border="1">
<tr>
    <th>รหัสภาค</th>
    <th>ชื่อภาค</th>
    <th>ลบ</th>
</tr>

<?php
include_once("connectdb.php");
$sql = "SELECT * FROM regions ORDER BY r_id ASC";
$rs = mysqli_query($conn, $sql);

while($data = mysqli_fetch_array($rs)){
?>
<tr>
    <td><?php echo $data['r_id']; ?></td>
    <td><?php echo $data['r_name']; ?></td>
    <td width="50"align="center"><a href="delete_region.php?id=<?php echo
	$data['r_id'];?>"onClick="return confirm('ยืนยันการลบ');"><img src ="images/del.jpg"width="20"></a></td>
</tr>
<?php } ?>

</table>

</body>
</html>
