<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn hơn</title>
    <link rel="stylesheet" href="style.css"> <!-- Liên kết tới tệp CSS nếu có -->
</head>
<body>

    <h2>Tìm số lớn hơn giữa hai số</h2>

    <form method="POST" action="calculator.php">
        <label>Nhập số thứ nhất:</label><br>
        <input type="number" name="so1" required><br>

        <label>Nhập số thứ hai:</label><br>
        <input type="number" name="so2" required><br>

        <!-- Trường hiển thị số lớn hơn -->
        <label>Số lớn hơn:</label><br>
        <input type="text" name="so_lon_hon" readonly value="<?php echo isset($_GET['so_lon_hon']) ? $_GET['so_lon_hon'] : ''; ?>"><br>

        <input type="submit" value="Tìm">
    </form>

</body>
</html>