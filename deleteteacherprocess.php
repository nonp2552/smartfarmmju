<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

$tid = $_GET['tid']; 


include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "delete from tbteacher where t_id = $tid";
$query = mysqli_query($con, $sql);


// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>


	ลบข้อมูลเรียบร้อยแล้ว
	<a href="index.php">กลับหน้าแรก</a>
</body>
</html>