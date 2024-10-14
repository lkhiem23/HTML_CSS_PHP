<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay Thế Từ Trong Chuỗi</title>
    <!-- Liên kết tệp CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h1>THAY THẾ TỪ TRONG CHUỖI</h1>

            <div class="group-form">
                <label for="chuoi">Chuỗi:</label>
                <input type="text" id="chuoi" name="chuoi" required>
            </div>

            <div class="group-form">
                <label for="tuGoc">Từ gốc:</label>
                <input type="text" id="tuGoc" name="tuGoc" required>
            </div>

            <div class="group-form">
                <label for="tuThayThe">Từ thay thế:</label>
                <input type="text" id="tuThayThe" name="tuThayThe" required>
            </div>

            <input type="submit" value="Thay thế">
            
            <input type="text" id="result" name="result" readonly value="<?php 
                // Kiểm tra nếu có dữ liệu từ form
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $chuoi = $_POST['chuoi'];
                    $tuGoc = $_POST['tuGoc'];
                    $tuThayThe = $_POST['tuThayThe'];
                    // Thay thế từ gốc bằng từ thay thế
                    $result = str_replace($tuGoc, $tuThayThe, $chuoi);
                    echo htmlspecialchars($result); // Xuất kết quả ra ô readonly
                }
            ?>">
        </div>
    </form>
</body>
</html>