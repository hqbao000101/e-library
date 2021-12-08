<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "BookBasement";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		# code...
		die("Connect failed: ".$conn->connect_error);
	}
	// Giu~ nguyen cac ki tu dac biet trong tieng viet
	mysqli_set_charset($conn,"utf8");
	// echo "Connected successfully !";

	// Khai bao bien, cau lenh, 1 string binh thuong
	// Kiem tra account in database
	$sql = "SELECT * FROM user";
	//ORDER BY id DESC";
	// LIMIT 0,2 : LIMIT start,length
	// Trong 1 cot thi vi tri dau tien la 0
	// Thuc thi lenh tren

	$result = $conn->query($sql);

	// Kiem tra co du lieu trong bang hay khong ?
	// if ($result->num_rows > 0) {
		// Neu co, bien row se chay tung dong` tu tren xuong trong bang
		// fetch_assoc : lay tung` dong` ra
		// while ($row = $result->fetch_assoc()) {
			# code... hien thi
			// var_dump($row);
		// }
	// Nguoc lai, khong co du lieu nao trong bang
	// } else {
	// 	echo "<br>0 results";
	// }

	// // update
	// $sql = "UPDATE student SET email='NguyenVanA@gmail.com' WHERE id = 1 ";
	// if ($conn->query($sql) === TRUE)
	// 	echo"<br>Updated";
	// else
	// 	echo "<br>Can't update: ".$conn->error;
	// $sql = "UPDATE student SET email='NguyenThiB@gmail.com' WHERE id = 2 ";
	// // Muon update nhieu dong dung` id thi dung` lenh "id IN (1,2)"
	// // ket qua cua update 
	// if ($conn->query($sql) === TRUE)
	// 	echo"<br>Updated";
	// else
	// 	echo "<br>Can't update: ".$conn->error;

	// // Khai bao bien, cau lenh, 1 string binh thuong
	// $sql = "SELECT * FROM student";
	// // Thuc thi lenh tren
	// $result = $conn->query($sql);
	// // Kiem tra co du lieu trong bang hay khong ?
	// if ($result->num_rows > 0) {
	// 	// Neu co, bien row se chay tung dong` tu tren xuong trong bang
	// 	// fetch_assoc : lay tung` dong` ra
	// 	while ($row = $result->fetch_assoc()) {
	// 		# code... hien thi
	// 		var_dump($row);
	// 	}
	// // Nguoc lai, khong co du lieu nao trong bang
	// } else {
	// 	echo "<br>0 results";
	// }

	// // insert 
	// $sql = "INSERT INTO student(firstname, lastname, email) VALUES ('Lê Thị','C','LeThiC@gmail.com'), ('Lê Văn','D','LeVanD@gamil.com')";
	// if ($conn->query($sql) === TRUE)
	// 	echo "New rows affected";
	// else
	// 	echo "Insert failed: ".$conn->error;

	// // Khai bao bien, cau lenh, 1 string binh thuong
	// $sql = "SELECT * FROM student";
	// // Thuc thi lenh tren
	// $result = $conn->query($sql);
	// // Kiem tra co du lieu trong bang hay khong ?
	// if ($result->num_rows > 0) {
	// 	// Neu co, bien row se chay tung dong` tu tren xuong trong bang
	// 	// fetch_assoc : lay tung` dong` ra
	// 	while ($row = $result->fetch_assoc()) {
	// 		# code... hien thi
	// 		var_dump($row);
	// 	}
	// // Nguoc lai, khong co du lieu nao trong bang
	// } else {
	// 	echo "<br>0 results";
	// }

	$conn->close();
?>