<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_index = $_POST['old_index'];
    $new_index = $_POST['new_index'];
    $unit_price = $_POST['unit_price'];

    // Kiểm tra dữ liệu hợp lệ
    if (is_numeric($old_index) && is_numeric($new_index) && is_numeric($unit_price)) {
        // Tính số tiền thanh toán
        $total = ($new_index - $old_index) * $unit_price;

        if ($total < 0) {
            echo "<p style='color: red;'>Chỉ số mới phải lớn hơn chỉ số cũ.</p>";
        } else {
            // Chuyển hướng và gửi kết quả qua GET method
            header("Location: index.php?total=$total&old_index=$old_index&new_index=$new_index&unit_price=$unit_price");
            exit();
        }
    } else {
        echo "<p style='color: red;'>Vui lòng nhập các giá trị số hợp lệ.</p>";
    }
}
?>