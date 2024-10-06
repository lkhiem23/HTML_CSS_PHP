<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Calculator</title>

    <!-- Liên kết tới file style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Tính Toán Trên Dãy Số</h1>
            <div class="form-group">
                <label for="startNumber">Số bắt đầu:</label>
                <input type="number" name="startNumber" id="startNumber" required>
                <label for="endNumber">Số kết thúc:</label>
                <input type="number" name="endNumber" id="endNumber" required>
            </div>

            <div class="input-group">
                <label for="tong">Tổng các số:</label>
                <input type="text" id="tong" name="tong" readonly>
            </div>

            <div class="input-group">
                <label for="tich">Tích các số:</label>
                <input type="text" id="tich" name="tich" readonly>
            </div>

            <div class="input-group">
                <label for="tongChan">Tổng các số chẵn:</label>
                <input type="text" id="tongChan" name="tongChan" readonly>
            </div>

            <div class="input-group">
                <label for="tongLe">Tổng các số lẻ:</label>
                <input type="text" id="tongLe" name="tongLe" readonly>
            </div>

            <button type="submit">Tính toán</button>
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = $_POST['startNumber'];
            $end = $_POST['endNumber'];
            
            $sum = 0;
            $product = 1;
            $even_sum = 0;
            $odd_sum = 0;

            for ($i = $start; $i <= $end; $i++) {
                $sum += $i;
                $product *= $i;

                if ($i % 2 == 0) {
                    $even_sum += $i;
                } else {
                    $odd_sum += $i;
                }
            }

            echo "<script>
                    document.getElementById('tong').value = '$sum';
                    document.getElementById('tich').value = '$product';
                    document.getElementById('tongChan').value = '$even_sum';
                    document.getElementById('tongLe').value = '$odd_sum';
                </script>";
        }
    ?>
</body>
</html>
