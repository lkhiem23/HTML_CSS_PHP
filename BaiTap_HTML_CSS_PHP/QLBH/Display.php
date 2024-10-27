<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="From.css">
    <title>Danh sách thuốc có nhà cung cấp Thiên Long</title>
</head>
<body>
    <?php

        $connect = mysqli_connect("localhost", "root", "", "qlbh");
        if (!$connect) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM vanphongpham WHERE ncc = 'Thiên Long' ";
        $result = $connect->query($query);

        if ($result->num_rows > 0) {
            echo "<h2>Danh sách thuốc có nhà cùng cấp Thiên Long:</h2>";
            echo "<table><tr><th>Mã Hàng</th><th>Tên Hàng</th><th>Nhà Cung Cấp</th><th>Giá</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" .$row["mah"]. " </td><td> " .$row["tenhang"]. "</td><td>" .$row["ncc"]. "</td><td>" .$row["gia"]. "</td></tr>";
            }
            echo "</table>";
        } 
        else {
            echo "Không tìm thấy thông tin tên thuốc có nhà cung cấp 'Thiên Long'.";
        }
        $connect->close();

        ?>
</body>
</html>
