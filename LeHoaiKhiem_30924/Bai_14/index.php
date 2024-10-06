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
            <h1>Tính Năm Âm Lịch</h1>
            <div class="form-group">
                <label id="huong" for="nhapSo">Năm Dương Lịch: </label>
                <label id="kenny" for="result">Năm Âm Lịch: </label>
            </div>
            <div class="form-group">
                <input type="number" name="nhapSo" id="nhapSo" required>
                <input type="submit" value="=>">
                <input type="text" name="result" id="result" readonly>
            </div>
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namDuong = $_POST['nhapSo'];
            $can = $namDuong % 10;
            $chi = $namDuong % 12;

            // Xác định Can
            switch ($can) {
                case 0: $canText = 'Canh'; break;
                case 1: $canText = 'Tân'; break;
                case 2: $canText = 'Nhâm'; break;
                case 3: $canText = 'Quý'; break;
                case 4: $canText = 'Giáp'; break;
                case 5: $canText = 'Ất'; break;
                case 6: $canText = 'Bính'; break;
                case 7: $canText = 'Đinh'; break;
                case 8: $canText = 'Mậu'; break;
                case 9: $canText = 'Kỷ'; break;
            }

            // Xác định Chi
            switch ($chi) {
                case 0: $chiText = 'Thân'; break;
                case 1: $chiText = 'Dậu'; break;
                case 2: $chiText = 'Tuất'; break;
                case 3: $chiText = 'Hợi'; break;
                case 4: $chiText = 'Tý'; break;
                case 5: $chiText = 'Sửu'; break;
                case 6: $chiText = 'Dần'; break;
                case 7: $chiText = 'Mão'; break;
                case 8: $chiText = 'Thìn'; break;
                case 9: $chiText = 'Tỵ'; break;
                case 10: $chiText = 'Ngọ'; break;
                case 11: $chiText = 'Mùi'; break;
            }

            // Kết quả năm âm lịch
            $namAmLich = $canText . ' ' . $chiText;
            echo "<script>document.getElementById('result').value = '$namAmLich';</script>";
        }
    ?>
</body>
</html>