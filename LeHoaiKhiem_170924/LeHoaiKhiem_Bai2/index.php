<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Hoài Khiêm - DHTI15A5HN - 21103100327</title>
    <link rel="stylesheet" href="style.css"> <!-- Liên kết tới tệp CSS -->
</head>
<body>

    <h2>Diện Tích và Chu Vi Hình Tròn</h2>

    <form method="POST" action="calculator.php">
        <label>Bán kính:</label><br>
        <input type="text" name="bankinh" required value="<?php echo isset($_GET['bankinh']) ? $_GET['bankinh'] : ''; ?>"><br>

        <!-- Trường hiển thị diện tích -->
        <label>Diện tích:</label><br>
        <input type="text" name="chuVi" value="<?php echo isset($_GET['chuVi']) ? $_GET['chuVi'] : ''; ?>" readonly><br>

        <!-- Trường hiển thị chu vi (readonly) -->
        <label>Chu vi:</label><br>
        <input type="text" name="dienTich" value="<?php echo isset($_GET['dienTich']) ? $_GET['dienTich'] : ''; ?>" readonly><br>


        <input type="submit" value="Tính">
    </form>

    

</body>
</html>