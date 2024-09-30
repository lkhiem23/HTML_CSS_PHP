<!doctype html>
<html>
<!-- mysqli_query-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width", initial-scale=1>
</head>
<body> 
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "qlhv";

		$conn = new mysqli($servername, $username, $password, $database);

		//kiểm tra kết nối
		if ($conn->connect_error) {
 		   die("Connection failed: " . $conn->connect_error);
		}
		//set bộ mã unicode (uft-8) cho kết nối csdl
		/*$conn->set_charset("uft8");*/

		//(1) tìm kiếm theo điều kiện 
		echo "Thực hiện tìm kiếm <br>";

		$sql = "SELECT * FROM hocvien WHERE khoahoc = 'css'";

		

		$result = $conn->query($sql); 

		//Hiển thị ra các giá trị thoả mãn
		if ($result->num_rows > 0) {
   		 // Output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "mã học viên: " . $row["mahv"]. " - Tên học viên: " . $row["tenhv"]. " - Số điện thoại: " . $row["sdt"]. " - Khóa học: " . $row["khoahoc"]. "<br>";
    		}
		} else {
    		echo "Không có giáo viên phù hợp trong cơ sở dữ liệu.";
		}

		//(2) Hiển thị toàn bộ dữ liệu bảng giaovien
		echo "<br> Hiển thị toàn bộ csdl <br>";

		$sql = "SELECT * FROM hocvien";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   		 // Output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "mã học viên: " . $row["mahv"]. " - Tên học viên: " . $row["tenhv"]. " - Số điện thoại: " . $row["sdt"]. " - Khóa học: " . $row["khoahoc"]. "<br>";
    		}
		} else {
    		echo "Không có giáo viên phù hợp trong cơ sở dữ liệu.";
		}

		$conn->close();
	?>
</body>
</html>