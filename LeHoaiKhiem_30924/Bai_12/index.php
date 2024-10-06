<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Số</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Đọc Số</h1>
            <div class="form-group">
                <label for="nhapSo">Nhập số : </label>
                <input type="text" name="nhapSo" id="nhapSo" required>
            </div>

            <input type="submit" value="=>">

            <div class="form-group">
                <label for="result">Bằng chữ : </label>
                <input type="text" name="result" id="result" readonly>
            </div>
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['nhapSo'];
            $result = '';

            switch ($number) {
                case '0':
                    $result = 'Không';
                    break;
                case '1':
                    $result = 'Một';
                    break;
                case '2':
                    $result = 'Hai';
                    break;
                case '3':
                    $result = 'Ba';
                    break;
                case '4':
                    $result = 'Bốn';
                    break;
                case '5':
                    $result = 'Năm';
                    break;
                case '6':
                    $result = 'Sáu';
                    break;
                case '7':
                    $result = 'Bảy';
                    break;
                case '8':
                    $result = 'Tám';
                    break;
                case '9':
                    $result = 'Chín';
                    break;
                default:
                    $result = 'Không hợp lệ';
                    break;
            }

            echo "<script>
                document.getElementById('result').value = '$result';
            </script>";
        }
    ?>
</body>
</html>