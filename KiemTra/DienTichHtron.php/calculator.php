<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];

    // Kiểm tra dữ liệu tồn tại và có phải là số hay không
    if (!isset($radius) || !is_numeric($radius)) {
        echo "<p style='color: red;'>Vui lòng nhập số vào trường bán kính.</p>";
    } else {
        if ($radius > 0) {
            // Tính diện tích và chu vi
            $area = pi() * pow($radius, 2);
            $circumference = 2 * pi() * $radius;

            // Chuyển hướng và gửi kết quả qua GET method
            header("Location: index.php?area=$area&circumference=$circumference");
            exit();
        } else {
            echo "<p style='color: red;'>Bán kính phải lớn hơn 0.</p>";
        }
    }
}
?>