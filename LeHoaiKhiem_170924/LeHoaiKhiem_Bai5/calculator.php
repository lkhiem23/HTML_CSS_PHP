<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];

    // Kiểm tra xem giá trị đầu vào có phải là số hay không
    if (is_numeric($so1) && is_numeric($so2)) {
        // Tìm số lớn hơn
        $so_lon_hon = ($so1 > $so2) ? $so1 : $so2;

        // Chuyển hướng và gửi kết quả qua GET method
        header("Location: index.php?so_lon_hon=$so_lon_hon&so1=$so1&so2=$so2");
        exit();
    } else {
        echo "<p style='color: red;'>Vui lòng nhập các giá trị số hợp lệ cho cả hai số.</p>";
    }
}
?>