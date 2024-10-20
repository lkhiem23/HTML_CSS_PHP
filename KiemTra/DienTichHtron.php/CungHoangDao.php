Bài cung hoàng đạo
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;}
        h1 {color: #333;}
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 18px;
            color: #555;  }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px; }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; }
        button:hover {
            background-color: #45a049; }
        p#result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333; }
    </style>
</head>
<body>
    <div>
        <h1>Zodiac Sign Finder</h1>
        <form id="zodiacForm">
            <label for="date">Enter your birthdate (DD/MM): </label>
            <input type="text" id="date" placeholder="e.g., 15/04">
            <button type="button" onclick="findZodiac()">Find Zodiac Sign</button>
        </form>
        <p id="result"></p>
    </div>
    <script>
        function findZodiac() {
            const dateInput = document.getElementById('date').value;
            const [day, month] = dateInput.split('/').map(Number);
            let zodiac = '';
            if ((month === 3 && day >= 21) || (month === 4 && day <= 20)) {
                zodiac = 'Cung Bạch Dương';
            } else if ((month === 4 && day >= 21) || (month === 5 && day <= 20)) {
                zodiac = 'Cung Kim Ngưu';
            } else if ((month === 5 && day >= 21) || (month === 6 && day <= 21)) {
                zodiac = 'Cung Song Tử';
            } else if ((month === 6 && day >= 22) || (month === 7 && day <= 22)) {
                zodiac = 'Cung Cự Giải';
            } else if ((month === 7 && day >= 23) || (month === 8 && day <= 22)) {
                zodiac = 'Cung Sư Tử';
            } else if ((month === 8 && day >= 23) || (month === 9 && day <= 22)) {
                zodiac = 'Cung Xử Nữ';
            } else if ((month === 9 && day >= 23) || (month === 10 && day <= 23)) {
                zodiac = 'Cung Thiên Bình';
            } else if ((month === 10 && day >= 24) || (month === 11 && day <= 22)) {
                zodiac = 'Cung Bọ Cạp';
            } else if ((month === 11 && day >= 23) || (month === 12 && day <= 21)) {
                zodiac = 'Cung Nhân Mã';
            } else if ((month === 12 && day >= 22) || (month === 1 && day <= 19)) {
                zodiac = 'Cung Ma Kết';
            } else if ((month === 1 && day >= 20) || (month === 2 && day <= 18)) {
                zodiac = 'Cung Bảo Bình';
            } else if ((month === 2 && day >= 19) || (month === 3 && day <= 20)) {
                zodiac = 'Cung Song Ngư';
            } else {
                zodiac = 'Invalid date!';
            }
            document.getElementById('result').innerText = `Your Zodiac sign is: ${zodiac}`;
        }
    </script>
</body>
</html>
Bài theo mùa
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;}
        .container {
            width: 400px;
            padding: 20px;
            background-color: #d4edda;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);  }
        label {
            display: block;
            margin: 10px 0 5px;}
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;}
        button {
            width: 100%;
            padding: 10px;
            background-color: #ff9933;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff6600;
        }
        .result {
            background-color: #5c9d79;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>TÌM MÙA THEO THÁNG</h1>
            <label for="">Nhập tháng :</label>
            <input type="text" name="month" id="month" min = "1" max = "12" required>
            <br><br>
            <button type="submit">Tìm mùa</button>
        </form>
        <?php
       // if ($_SERVER["REQUEST_METHOD"] == "POST") {
       //     $month = $_POST['month'];
       //     $message = "";
        if($_SERVER["REQUEST_METHOD" == "POST"]){
            $month = $_POST['month'];
            $message = "";

        

            if ($month >= 1 && $month <= 3) {
                $message = "Mùa xuân";
            } elseif ($month >= 4 && $month < 6) {
                $message = "Mùa hạ";
            } elseif ($month >= 7 && $month <= 9) {
                $message = "Mùa thu";
            }elseif ($month >= 10 && $month <= 12) {
                $message = "Mùa đông";
            }
            echo "<div class='result'>$message</div>";
        }
        ?>
    </div>
</body>
</html>
Bài mùa yêu cầu     <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #d4edda;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px; }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;}
        button {
            width: 100%;
            padding: 10px;
            background-color: #ff9933;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer; }
        button:hover {
            background-color: #ff6600;
        }
        .result {
            background-color: #5c9d79;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>TÌM MÙA THEO THÁNG</h1>
            <label for="">Nhập tháng :</label>
            <input type="text" name="hour" id="hour" required>
            <br><br>
            <button type="submit">Tìm mùa</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hour = $_POST['hour'];
            $input_array = array_map('intval', explode(",", $hour)); // Chuyển chuỗi thành mảng các số nguyên
            $message = "Không hợp lệ";
            // Các giá trị hợp lệ cho từng mùa
            $valid_spring_hours = [1, 2, 3];  // Mùa xuân: tháng 1, 2, 3
            $valid_summer_hours = [4, 5, 6];  // Mùa hạ: tháng 4, 5, 6
            $valid_autumn_hours = [7, 8, 9];  // Mùa thu: tháng 7, 8, 9
            $valid_winter_hours = [10, 11, 12]; // Mùa đông: tháng 10, 11, 12
            // Kiểm tra nếu tất cả các giá trị nhập vào nằm trong mùa nào
            if (!array_diff($input_array, $valid_spring_hours) && count($input_array) == count($valid_spring_hours)) {
                $message = "Mùa xuân";
            } elseif (!array_diff($input_array, $valid_summer_hours) && count($input_array) == count($valid_summer_hours)) {
                $message = "Mùa hạ";
            } elseif (!array_diff($input_array, $valid_autumn_hours) && count($input_array) == count($valid_autumn_hours)) {
                $message = "Mùa thu";
            } elseif (!array_diff($input_array, $valid_winter_hours) && count($input_array) == count($valid_winter_hours)) {
                $message = "Mùa đông";
            }
            echo "<div class='result'>$message</div>";
        }
        ?>
    </div>
</body>
</html>
