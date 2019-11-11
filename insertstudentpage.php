
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="insertstudentprocess.php" method="POST">
		รหัสนักึกษา : <input type="text" name="stid"> <br>
		คำนำหน้า : <select name="stprename">
			<option value="นาย">นาย</option>
			<option value="นาง">นาง</option>
			<option value="นางสาว">นางสาว</option>
		</select> <br>
		ชื่อ : <input type="text" name="stname"> <br>
		นามสกุล : <input type="text" name="stsurname"> <br>
		ที่ปรึกษา : <select name="tid" >
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
			<option value="<?php  echo $row['t_id'];  ?>">
				<?php  echo $row['t_name']." ".$row['t_surname'];  ?>
			</option>
						
		<?php
		}

		// 4.ปิดการเชื่อมต่อ
		mysqli_close ($con);
		?>

		</select> <br>

		<input type="submit" value="เพิ่มข้อมูล">
	</form>


</body>
</html>