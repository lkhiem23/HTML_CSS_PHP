<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Hoài Khiêm - DHTI15A5HN - 21103100327</title>
    <link rel="stylesheet" href="style.css"> <!-- Liên kết tới tệp CSS -->
</head>
<body>

    <h2>Tính Cạnh Huyền Tam Giác Vuông</h2>

    <form method="POST" action="calculator.php">
        <label>Cạnh a:</label><br>
        <input type="text" name="canh_a" required value="<?php echo isset($_GET['canh_a']) ? $_GET['canh_a'] : ''; ?>"><br>

        <label>Cạnh b:</label><br>
        <input type="text" name="canh_b" required value="<?php echo isset($_GET['canh_b']) ? $_GET['canh_b'] : ''; ?>"><br>

        <!-- Trường hiển thị cạnh huyền -->
        <label>Cạnh huyền:</label><br>
        <input type="text" name="canh_huyen" readonly value="<?php echo isset($_GET['canh_huyen']) ? $_GET['canh_huyen'] : ''; ?>"><br>

        <input type="submit" value="Tính">
    </form>

</body>
</html>