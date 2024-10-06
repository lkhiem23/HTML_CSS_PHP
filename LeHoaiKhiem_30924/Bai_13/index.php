<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thứ Trong Tuần</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Tìm Thứ Trong Tuần</h1>
            <label for="">Ngày Tháng Năm :</label>
            <input type="text" id="day" name="day" min="1" max="31" required>/
            <input type="text" id="month" name="month" min="1" max="12" required>/
            <input type="text" id="year" name="year" min="1000" max="9999" required>
            <button type="submit">Tìm thứ trong tuần</button>
            <div>
                <input type="text" id="result" name="result" readonly>
            </div>
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];

            $timestamp = mktime(0, 0, 0, $month, $day, $year);
            $weekdayNumber = date("w", $timestamp);

            switch ($weekdayNumber) {
                case 0:
                    $weekdayName = "Chủ Nhật";
                    break;
                case 1:
                    $weekdayName = "Thứ Hai";
                    break;
                case 2:
                    $weekdayName = "Thứ Ba";
                    break;
                case 3:
                    $weekdayName = "Thứ Tư";
                    break;
                case 4:
                    $weekdayName = "Thứ Năm";
                    break;
                case 5:
                    $weekdayName = "Thứ Sáu";
                    break;
                case 6:
                    $weekdayName = "Thứ Bảy";
                    break;
                default:
                    $weekdayName = "Không xác định";
            }

            $result = "Ngày $day/$month/$year là $weekdayName";
            
            echo "<script>
                    document.getElementById('result').value = '$result';
                  </script>";
        }
    ?>
</body>
</html>