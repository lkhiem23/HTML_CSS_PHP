<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USCLN và BSCNN</title>
    <!-- Liên kết tệp CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h1>ƯỚC SỐ CHUNG LỚN NHẤT Và BỘI SỐ CHUNG NHỎ NHẤT</h1>
            
            <div class="form-group">
                <label for="soA">Số a :</label>
                <input type="text" id="soA" name="soA" required>
            </div>
            <div class="form-group">
                <label for="soB">Số b :</label>
                <input type="text" id="soB" name="soB" required>
            </div>
            <div class="form-group">
                <label for="USCLN">USCLN :</label>
                <input type="text" id="USCLN" name="USCLN" readonly>
            </div>
            <div class="form-group">
                <label for="BSCNN">BSCNN :</label>
                <input type="text" id="BSCNN" name="BSCNN" readonly>
            </div>
            <input type="submit" value="Tìm USCLN và BSCNN">
        </div>
    </form>

    <?php
        //Khởi tạo biến 
        $uscln = '';
        $bscnn = '';
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $a = intval($_POST['soA']);
            $b = intval($_POST['soB']);

            // Hàm tính USCLN
            function ucln($x, $y) {
                while ($y != 0) {
                    $temp = $y;
                    $y = $x % $y;
                    $x = $temp;
                }
                return abs($x); // Trả về USCLN
            }

            // Hàm tính BSCNN
            function bscnn($x, $y) {
                return abs($x * $y) / ucln($x, $y);
            }

            // Tính USCLN và BSCNN
            $uscln = ucln($a, $b);
            $bscnn = bscnn($a, $b);
        }
    ?>

    <script>
        // Gán giá trị USCLN và BSCNN vào các ô input
        const uscln = "<?php echo $uscln; ?>";
        const bscnn = "<?php echo $bscnn; ?>";

        document.getElementById('USCLN').value = uscln;
        document.getElementById('BSCNN').value = bscnn;
    </script>
</body>
</html>