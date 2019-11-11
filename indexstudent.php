<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a href="index.php">จัดการข้อมูลอาจารย์</a>
จัดการข้อมูลนักศึกษา

<br>
<br>
<a href="insertstudentpage.php">เพิ่มข้อมูลนักศึกษา</a>
<table border="1">
	<tr bgcolor="green">
		<td>รหัส</td>
		<td>คำนำหน้า</td>
		<td>ชื่อ</td>
		<td>นามสกุล</td>
		<td>อาจารย์ที่ปรึกษา</td>
		<td>แก้ไข</td>
		<td>ลบ</td>
	</tr>

	<?php
include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "select * 
FROM tbstudent inner join tbteacher
on tbstudent.t_id = tbteacher.t_id";
$query = mysqli_query($con, $sql);

//3. วนลูปแสดง
while ($row = mysqli_fetch_array($query))
{
?>
<tr>
		<td><?php  echo $row['st_id'];  ?></td>
		<td><?php  echo $row['st_prename'];  ?></td>
		<td><?php  echo $row['st_name'];  ?></td>
		<td><?php  echo $row['st_surname'];  ?></td>
		<td><?php  echo $row['t_name'];  ?></td>
		<td><a href="updatestudentpage.php?stid=<?php  echo $row['st_id'];  ?>">แก้ไข</a></td>
		<td><a href="deletestudentprocess.php?stid=<?php  echo $row['st_id'];  ?>">ลบ</a></td>
	</tr>

<?php
}

// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>
	
</table>

</body>
</html>