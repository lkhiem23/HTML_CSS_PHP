<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy Tính Diện Tích Hình Chữ Nhật</title>
    <link rel="stylesheet" href="style.css"> <!-- Liên kết tới tệp CSS -->
</head>
<body>

    <h2>Diện Tích Hình Chữ Nhật</h2>

    <!-- Form gửi dữ liệu tới chính tệp index.php -->
    <form method="POST" action="index.php">
        <label>Chiều dài:</label><br>
        <input type="text" name="cdai" required value="<?php echo isset($_GET['cdai']) ? $_GET['cdai'] : ''; ?>"><br>

        <label>Chiều rộng:</label><br>
        <input type="text" name="crong" required value="<?php echo isset($_GET['crong']) ? $_GET['crong'] : ''; ?>"><br>

        <label>Diện tích:</label><br>
        <!-- Hiển thị kết quả tính toán -->
        <input type="text" name="area" readonly value="<?php echo isset($_GET['area']) ? $_GET['area'] : ''; ?>"><br>

        <input type="submit" value="Tính">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lấy dữ liệu từ form
        $cdai = isset($_POST['cdai']) ? (float)$_POST['cdai'] : 0;
        $crong = isset($_POST['crong']) ? (float)$_POST['crong'] : 0;

        // Tính diện tích
        $chuVi = $cdai * $crong;

        // Chuyển hướng lại trang index.php kèm kết quả diện tích
        header("Location: index.php?area=" . $area);
        exit();
    }
    ?>

</body>
</html>