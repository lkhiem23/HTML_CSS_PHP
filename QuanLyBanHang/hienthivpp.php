<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="From.css">
	<title>Thêm mới văn phòng phẩm</title>
</head>
<body>
	<form method="POST">
		<label>Mã Hàng: <input type="text" name="mah"></label>
		<label>Tên Hàng: <input type="text" name="tenhang"></label>
		<label>Nhà Cung Cấp: <input type="text" name="nhacc"></label>
		<label>Giá: <input type="text" name="gia"></label>
		<input type="submit" value="Thêm Mới">
	</form>

	<?php
		$connect= mysqli_connect("localhost", "root", "", "qlbh");

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$h1= mysqli_real_escape_string($connect, $_POST["mah"]);
			$h2= mysqli_real_escape_string($connect, $_POST["tenhang"]);
			$h3= mysqli_real_escape_string($connect, $_POST["ncc"]);
			$h4= mysqli_real_escape_string($connect, $_POST["gia"]);

			$sql= "INSERT INTO vanphongpham VALUES ('$h1', '$h2', '$h3', '$h4')";
			$result = $connect -> query($sql);

			if($result) {
				echo "Thêm mới thành công!";
			} else {
				echo "Không thêm được: " . $connect->error;
			}
		}

		$sql = "SELECT * FROM vanphongpham";
		$result = $connect->query($sql);

		if ($result->num_rows > 0) {
			echo "<h2>Danh sách văn phòng phẩm:</h2>";
			echo "<table><tr><th>Mã Hàng</th><th>Tên Hàng</th><th>Nhà Cung Cấp</th><th>Giá</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" .$row["mah"]. "</td><td>" .$row["tenhang"]. "</td><td>" .$row["ncc"]. "</td><td>" .$row["gia"]. "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		$connect->close();
	?>
</body>
</html>
