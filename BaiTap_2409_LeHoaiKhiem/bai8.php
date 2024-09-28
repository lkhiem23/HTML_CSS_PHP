<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Thi Đại Học</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FCE4EC;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background-color: #F8BBD0;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        input[type="text"] {
            padding: 5px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 5px 15px;
            border-radius: 5px;
            border: 1px solid #D81B60;
            background-color: #D81B60;
            color: white;
            cursor: pointer;
        }
        label, h1 {
            color: #AD1457;
        }
        p.result {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>KẾT QUẢ THI ĐẠI HỌC</h1>
        <form method="post" action="">
            <label for="toan">Toán:</label>
            <input type="text" id="toan" name="toan" placeholder="Nhập điểm Toán"><br>

            <label for="ly">Lý:</label>
            <input type="text" id="ly" name="ly" placeholder="Nhập điểm Lý"><br>

            <label for="hoa">Hóa:</label>
            <input type="text" id="hoa" name="hoa" placeholder="Nhập điểm Hóa"><br>

            <label for="diemchuan">Điểm chuẩn:</label>
            <input type="text" id="diemchuan" name="diemchuan" placeholder="Nhập điểm chuẩn"><br>

            <label for="tongdiem">Tổng điểm:</label>
            <input type="text" id="tongdiem" name="tongdiem" readonly><br>

            <label for="ketqua">Kết quả thi:</label>
            <input type="text" id="ketqua" name="ketqua" readonly><br>

            <input type="submit" value="Xem kết quả">
        </form>

        <p class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $toan = floatval($_POST['toan']);
                    $ly = floatval($_POST['ly']);
                    $hoa = floatval($_POST['hoa']);
                    $diemchuan = floatval($_POST['diemchuan']);

                    if (($toan >= 0 && $toan <= 10) && ($ly >= 0 && $ly <= 10) && ($hoa >= 0 && $hoa <= 10)) {
                        // Calculate total score
                        $tongdiem = $toan + $ly + $hoa;

                        echo "<script>document.getElementById('tongdiem').value = '$tongdiem';</script>";

                        // Determine if passed or failed
                        if ($tongdiem >= $diemchuan) {
                            echo "<script>document.getElementById('ketqua').value = 'Đậu';</script>";
                        } else {
                            echo "<script>document.getElementById('ketqua').value = 'Rớt';</script>";
                        }
                    } else {
                        echo "Vui lòng nhập điểm hợp lệ (0-10) cho tất cả các môn.";
                    }
                }
            ?>
        </p>
    </div>
</body>
</html>
