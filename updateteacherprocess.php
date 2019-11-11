<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$tid = $_POST['tid']; 
$tname = $_POST['tname']; 
$tsurname = $_POST['tsurname'];

include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "update tbteacher 
set 
t_name = '$tname',
t_surname = '$tsurname'
where t_id = $tid";
$query = mysqli_query($con, $sql);


// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>


	บันทึกข้อมูลเรียบร้อยแล้ว
	<a href="index.php">กลับหน้าแรก</a>
</body>
</html>