<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><?php
$tid = $_GET['tid'];

include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "select * 
FROM tbteacher where t_id = $tid";
$query = mysqli_query($con, $sql);

//3. วนลูปแสดง
while ($row = mysqli_fetch_array($query))
{
?>
<form action="updateteacherprocess.php" method="POST">
	รหัส : <input type="text" name="tid" readonly="true" value="<?php  echo $row['t_id'];  ?>"> <br>
	ชื่อ : <input type="text" name="tname" value="<?php  echo $row['t_name'];  ?>"> <br>
	นามสกุล : <input type="text" name="tsurname" value="<?php  echo $row['t_surname'];  ?>"> <br>
	<input type="submit" value="แก้ไขข้อมูล">
</form>
<?php
}

// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>
	


</body>
</html>