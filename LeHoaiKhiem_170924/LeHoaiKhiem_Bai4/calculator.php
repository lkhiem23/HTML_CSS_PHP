<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $canh_a = $_POST['canh_a'];
    $canh_b = $_POST['canh_b'];

    // Kiểm tra xem giá trị đầu vào có phải là số không
    if (is_numeric($canh_a) && is_numeric($canh_b)) {
        // Tính cạnh huyền theo định lý Pythagoras
        $canh_huyen = sqrt(pow($canh_a, 2) + pow($canh_b, 2));

        // Chuyển hướng và gửi kết quả qua GET method
        header("Location: index.php?canh_huyen=$canh_huyen&canh_a=$canh_a&canh_b=$canh_b");
        exit();
    } else {
        echo "<p style='color: red;'>Vui lòng nhập các giá trị số hợp lệ cho cạnh a và cạnh b.</p>";
    }
}
?>