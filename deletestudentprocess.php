<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

$stid = $_GET['stid']; 

include('connect.php');


// 2. ใส่โค๊ด SQL
$sql = "delete from tbstudent where st_id = $stid";
$query = mysqli_query($con, $sql);


// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>


	ลบข้อมูลเรียบร้อยแล้ว
	<a href="indexstudent.php">กลับหน้าแรก</a>
</body>
</html>