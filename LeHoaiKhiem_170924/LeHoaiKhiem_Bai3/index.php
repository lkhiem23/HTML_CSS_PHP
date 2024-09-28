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

    <h2>Tính Số Tiền Thanh Toán</h2>

    <form method="POST" action="calculator.php">
        <label>Chỉ số cũ:</label><br>
        <input type="text" name="old_index" required value="<?php echo isset($_GET['old_index']) ? $_GET['old_index'] : ''; ?>"><br>

        <label>Chỉ số mới:</label><br>
        <input type="text" name="new_index" required value="<?php echo isset($_GET['new_index']) ? $_GET['new_index'] : ''; ?>"><br>

        <label>Đơn giá:</label><br>
        <input type="text" name="unit_price" required value="<?php echo isset($_GET['unit_price']) ? $_GET['unit_price'] : ''; ?>"><br>

        <label>Số tiền cần thanh toán:</label><br>
        <input type="text" name="total" readonly value="<?php echo isset($_GET['total']) ? $_GET['total'] : ''; ?>"><br>


        <input type="submit" value="Tính">

    </form>
</body>
</html>