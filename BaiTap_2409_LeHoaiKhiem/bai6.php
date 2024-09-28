<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Theo Giờ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E0F7FA;
            text-align: center;
            padding-top: 100px;
        }
        .container {
            background-color: #e9618f;
            border-radius: 10px;
            padding: 20px;
            display: inline-block;
        }
        input[type="text"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 5px 15px;
            border-radius: 5px;
            border: 1px solid #0288D1;
            background-color: #0288D1;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CHÀO THEO GIỜ</h1>
        <form method="post" action="">
            <label for="hour">Nhập giờ:</label>
            <input type="text" id="hour" name="hour" placeholder="Nhập giờ">
            <input type="submit" value="Chào">
        </form>
        <p>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $hour = intval($_POST['hour']);
                    if ($hour >= 0 && $hour <= 23) {
                        if ($hour >= 0 && $hour < 13) {
                            echo "Chào buổi sáng!";
                        } elseif ($hour >= 13 && $hour < 18) {
                            echo "Chào buổi chiều!";
                        } else {
                            echo "Chào buổi tối!";
                        }
                    } else {
                        echo "Vui lòng nhập giờ từ 0-23.";
                    }
                }
            ?>
        </p>
    </div>
</body>
</html>