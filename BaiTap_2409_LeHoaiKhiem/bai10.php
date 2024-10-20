<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #ff9900;
        }
        label, input {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
        input[type="number"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ff9900;
            border: none;
            padding: 10px;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #e68a00;
        }
        .result {
            margin-top: 10px;
            color: green;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính tiền Karaoke</h2>

        <?php
        // Initialize result and error variables
        $result = "";
        $error = "";

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];

            // Validate inputs
            if (is_numeric($start_time) && is_numeric($end_time)) {
                // Ensure times are between 0 and 24
                if ($start_time >= 0 && $start_time <= 24 && $end_time >= 0 && $end_time <= 24) {
                    // Calculate the cost
                    $total_cost = 0;
                    $price_before_17h = 20000; 
                    $price_after_17h = 45000;  

                    // Handle case where end_time is earlier than start_time (overnight usage)
                    if ($end_time < $start_time) {
                        $end_time += 24; // treat as next day usage
                    }

                    // Loop through each hour between start and end time
                    for ($i = $start_time; $i < $end_time; $i++) {
                        if ($i < 17) {
                            $total_cost += $price_before_17h; // Before 17h pricing
                        } else {
                            $total_cost += $price_after_17h;  // After 17h pricing
                        }
                    }

                    // Display the result
                    $result = "Thành tiền: " . number_format($total_cost, 0, ',', '.') . " VND";
                } else {
                    $error = "Please enter valid times between 0 and 24.";
                }
            } else {
                $error = "Please enter numeric values for start and end times.";
            }
        }
        ?>

        <!-- Form -->
        <form method="POST" action="">
            <label for="start_time">Thời gian bắt đầu (h):</label>
            <input type="number" id="start_time" name="start_time" min="0" max="24" required>

            <label for="end_time">Thời gian kết thúc (h):</label>
            <input type="number" id="end_time" name="end_time" min="0" max="24" required>

            <input type="submit" value="Tính tiền">
        </form>

        <!-- Display result or error -->
        <?php if (!empty($result)): ?>
            <div class="result">
                <strong><?php echo $result; ?></strong>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="error">
                <strong><?php echo $error; ?></strong>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
