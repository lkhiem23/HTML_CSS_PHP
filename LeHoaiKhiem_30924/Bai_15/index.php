<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day of the Month</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Tính Ngày Trong Tháng</h1>
            <div class="form-group">
                <label for="month">Tháng/Năm:</label>
                <input type="number" id="month" name="month" placeholder="Tháng" min="1" max="12" required> /
                <input type="number" id="year" name="year" placeholder="Năm" min="1900" required>
            </div>

            <div>
                <button type="submit">Tính số ngày</button>
            </div>

            <div class="form-group"> 
                <input type="text" id="result" name="result" readonly placeholder="Số ngày trong tháng">
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = $_POST['month'];
        $year = $_POST['year'];
        $days = 0;

        switch ($month) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                $days = 31;
                break;
            case 4: case 6: case 9: case 11:
                $days = 30;
                break;
            case 2:
                // Kiểm tra năm nhuận
                if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                    $days = 29;
                } else {
                    $days = 28;
                }
                break;
            default:
                $days = "Tháng không hợp lệ";
                break;
        }

        echo "<script>
            document.getElementById('result').value = 'Tháng $month năm $year có $days ngày';
        </script>";
    }
    ?>
</body>
</html>