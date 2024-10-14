<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Hai</title>
    <!-- Liên kết tệp CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <h1>Giải Phương Trình Bậc Hai</h1>
            <div class="form-group">
                <label for="">Phương trình :</label>
                <input class="kenny" type="text" id="a" name="a" required>x² + 
                <input class="kenny" type="text" id="b" name="b" required>x +
                <input class="kenny" type="text" name="c" id="c"> = 0
            </div>
            <div class="form-group">
                <label for="">Nghiệm:</label>
                <input type="text" id="result" name="result" readonly>
            </div>

            <input type="submit" value="Giải phương trình">
        </div>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            if ($a == 0) {
                echo "<script>document.getElementById('result').value='Đây không phải phương trình bậc 2'</script>";
            } else {
                // Tính delta
                $delta = $b * $b - 4 * $a * $c;

                if ($delta > 0) {
                    // Phương trình có 2 nghiệm phân biệt
                    $x1 = (-$b + sqrt($delta)) / (2 * $a);
                    $x2 = (-$b - sqrt($delta)) / (2 * $a);
                    $result = "x₁ = $x1, x₂ = $x2";
                } elseif ($delta == 0) {
                    // Phương trình có nghiệm kép
                    $x = -$b / (2 * $a);
                    $result = "x = $x (Nghiệm kép)";
                } else {
                    // Phương trình vô nghiệm
                    $result = "Phương trình vô nghiệm";
                }

                echo "<script>document.getElementById('result').value='$result'</script>";
            }
        }
    ?>
</body>
</html>