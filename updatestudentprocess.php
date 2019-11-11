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
$sql = "update tbstudent 
set 
st_prename = '$stprename',
st_name = '$stname',
st_surname = '$stsurname',
t_id = $tid
where st_id = '$stid'";

$query = mysqli_query($con, $sql);


// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>


	บันทึกข้อมูลเรียบร้อยแล้ว
	<a href="indexstudent.php">กลับหน้าแรก</a>
</body>
</html>