<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

$stid = $_POST['stid']; 
$stprename = $_POST['stprename']; 
$stname = $_POST['stname']; 
$stsurname = $_POST['stsurname'];
$tid = $_POST['tid'];

include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "insert INTO tbstudent (st_id,st_prename,st_name,st_surname,t_id)
VALUES ('$stid','$stprename','$stname','$stsurname','$tid')";
$query = mysqli_query($con, $sql);


// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>


	บันทึกข้อมูลเรียบร้อยแล้ว
	<a href="indexstudent.php">กลับหน้าแรก</a>
</body>
</html>