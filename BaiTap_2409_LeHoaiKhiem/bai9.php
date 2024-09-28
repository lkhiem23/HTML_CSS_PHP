<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
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
        input[type="text"] {
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
        <h2>Linear Equation Solver</h2>
        
        <?php
        // Initialize result and error messages
        $result = "";
        $error = "";

        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'];
            $b = $_POST['b'];
            
            // Check if both a and b are numeric
            if (is_numeric($a) && is_numeric($b)) {
                if ($a == 0) {
                    if ($b == 0) {
                        $result = "The equation has infinite solutions.";
                    } else {
                        $result = "The equation has no solution.";
                    }
                } else {
                    $x = -$b / $a;
                    $result = "x = " . $x;
                }
            } else {
                $error = "Please enter valid numeric values for both coefficients.";
            }
        }
        ?>

        <!-- Form for input -->
        <form method="POST" action="">
            <label for="a">Nhập a:</label>
            <input type="text" id="a" name="a" required>
            
            <label for="b">Nhập b:</label>
            <input type="text" id="b" name="b" required>
            
            <input type="submit" value="Solve Equation">
        </form>

        <!-- Display result or error message -->
        <?php if (!empty($result)): ?>
            <div class="result">
                <strong>Kết quả: </strong><?php echo $result; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="error">
                <strong>Error: </strong><?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
