<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ชนิกานต์ ขำสระน้อย (ปุ้ม)</title>
</head>

<body>
<h1>งาน i</h1>
<h1>ชนิกานต์ ขำสระน้อย (ปุ้ม)</h1>

<?php
	include_once("connectdb.php");
	$sql = "SELECT * FROM `regions` ORDER BY `r_id` ASC";
	$rs = mysqli_query($conn,$sql);

	while($data = mysqli_fetch_array($rs)){
		echo $data['r_id']."".$data['r_name']."<br>";
	}
	
?>

<table border="1">
	<tr>
		<th>รหัสภาค</th>
		<th>ชื่อภาค</th>
	</tr>
    
<tr>
		<td>xxx</td>
		<td>xxx</td>
	</tr>
</table>

</body>
</html>