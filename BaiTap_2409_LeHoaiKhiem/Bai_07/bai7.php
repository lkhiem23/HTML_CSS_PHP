<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bai7.css">
    <title>Kết Quả Học Tập</title>
   
</head>
<body>
    <div class="container">
        <h1>KẾT QUẢ HỌC TẬP</h1>
        <form method="post" action="">
            <label for="hk1">Điểm HK1:</label>
            <input type="text" id="hk1" name="hk1" placeholder="Nhập điểm HK1"><br>

            <label for="hk2">Điểm HK2:</label>
            <input type="text" id="hk2" name="hk2" placeholder="Nhập điểm HK2"><br>

            <label for="dtb">Điểm trung bình:</label>
            <input type="text" id="dtb" name="dtb" readonly><br>

            <label for="ketqua">Kết quả:</label>
            <input type="text" id="ketqua" name="ketqua" readonly><br>

            <label for="xeploai">Xếp loại học lực:</label>
            <input type="text" id="xeploai" name="xeploai" readonly><br>

            <input type="submit" value="Xem kết quả">
        </form>

        <p class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $hk1 = floatval($_POST['hk1']);
                    $hk2 = floatval($_POST['hk2']);

                    if (($hk1 >= 0 && $hk1 <= 10) && ($hk2 >= 0 && $hk2 <= 10)) {
                        // Calculate average score
                        $dtb = ($hk1 + $hk2 * 2) / 3;
                        $dtb = round($dtb, 2); // Round to 2 decimal points

                        echo "<script>document.getElementById('dtb').value = '$dtb';</script>";

                        // Determine pass/fail
                        if ($dtb >= 5) {
                            echo "<script>document.getElementById('ketqua').value = 'Được lên lớp';</script>";

                            // Determine classification
                            if ($dtb >= 8) {
                                echo "<script>document.getElementById('xeploai').value = 'Giỏi';</script>";
                            } elseif ($dtb >= 6.5) {
                                echo "<script>document.getElementById('xeploai').value = 'Khá';</script>";
                            } else {
                                echo "<script>document.getElementById('xeploai').value = 'Trung bình';</script>";
                            }
                        } else {
                            echo "<script>document.getElementById('ketqua').value = 'Không được lên lớp';</script>";
                            echo "<script>document.getElementById('xeploai').value = 'Yếu';</script>";
                        }
                    } else {
                        echo "Vui lòng nhập điểm hợp lệ (0-10).";
                    }
                }
            ?>
        </p>
    </div>
</body>
</html>
