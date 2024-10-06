<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1 id="tren">BẢNG CỬU CHƯƠNG</h1>
            <label for="so">Cửu Chương:</label>
            <input type="number" id="so" name="so" required>
            <button type="submit">Thực hiện</button>
            <h1 id="duoi">Kết Quả</h1>
        </form>

        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number = $_POST['so'];

                    for ($i = 1; $i <= 10; $i++) { 
                        $result = $number * $i;
                        echo "<p>$number x $i = $result</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
