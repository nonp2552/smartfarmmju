<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
จัดการข้อมูลอาจารย์
<a href="indexstudent.php">จัดการข้อมูลนักศึกษา</a>
<br>
<br>
<a href="insertteacherpage.php">เพิ่มข้อมูลอาจารย์</a>
<table border="1">
	<tr bgcolor="green">
		<td>รหัส</td>
		<td>ชื่อ</td>
		<td>นามสกุล</td>
		<td>แก้ไข</td>
		<td>ลบ</td>
	</tr>

	<?php
include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "select * 
FROM tbteacher";
$query = mysqli_query($con, $sql);

//3. วนลูปแสดง
while ($row = mysqli_fetch_array($query))
{
?>
<tr>
		<td><?php  echo $row['t_id'];  ?></td>
		<td><?php  echo $row['t_name'];  ?></td>
		<td><?php  echo $row['t_surname'];  ?></td>
		<td><a href="updateteacherpage.php?tid=<?php  echo $row['t_id'];  ?>">แก้ไข</a></td>
		<td><a href="deleteteacherprocess.php?tid=<?php  echo $row['t_id'];  ?>">ลบ</a></td>
	</tr>

<?php
}

// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>
	
</table>

</body>
</html>