<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><?php
$stid = $_GET['stid'];

include('connect.php');

// 2. ใส่โค๊ด SQL
$sql = "select * 
FROM tbstudent where st_id = $stid";
$query = mysqli_query($con, $sql);

//3. วนลูปแสดง
while ($row = mysqli_fetch_array($query))
{
?>
<form action="updatestudentprocess.php" method="POST">
	รหัส : <input type="text" name="stid" readonly="true" value="<?php  echo $row['st_id'];  ?>"> <br>
	คำนำหน้า 	: <select name="stprename">
			<option value="นาย"
			<?php
				
					if($row['st_prename'] == "นาย"){
						echo " selected";
					}
					

				?>
			>นาย</option>
			<option value="นาง"
			<?php
					if($row['st_prename'] == 'นาง'){
						echo " selected";
					}

				?>
			>นาง</option>
			<option value="นางสาว"
			<?php
					if($row['st_prename'] == 'นางสาว'){
						echo " selected";
					}

				?>
			>นางสาว</option>
		</select> <br>
	ชื่อ : <input type="text" name="stname" value="<?php  echo $row['st_name'];  ?>"> <br>
	นามสกุล : <input type="text" name="stsurname" value="<?php  echo $row['st_surname'];  ?>"> <br>
	อาจารย์ที่ปรึกษา : <select name="tid" >
	<?php
		// 2. ใส่โค๊ด SQL
		$sql = "select * 
		FROM tbteacher";
		$query = mysqli_query($con, $sql);

		//3. วนลูปแสดง
		while ($row2 = mysqli_fetch_array($query))
		{
		?>
			<option value="<?php  echo $row2['t_id'];  ?>" 
				<?php
					if($row2['t_id'] == $row['t_id']){
						echo " selected";
					}

				?>
			>
				<?php  echo $row2['t_name']." ".$row2['t_surname'];  ?>
			</option>
						
		<?php
		}

		?>
		</select> <br>
	<input type="submit" value="แก้ไขข้อมูล">
</form>
<?php
}

// 4.ปิดการเชื่อมต่อ
mysqli_close ($con);
?>
	


</body>
</html>