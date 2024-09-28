<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dạng tam giác</title>
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
        <h2>Triangle Type Identifier</h2>

        <?php
        // Initialize result and error variables
        $result = "";
        $error = "";

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $side1 = $_POST['side1'];
            $side2 = $_POST['side2'];
            $side3 = $_POST['side3'];

            // Validate inputs (make sure all are numbers and greater than 0)
            if (is_numeric($side1) && is_numeric($side2) && is_numeric($side3) &&
                $side1 > 0 && $side2 > 0 && $side3 > 0) {

                // Check if the sides form a valid triangle
                if (($side1 + $side2 > $side3) && ($side1 + $side3 > $side2) && ($side2 + $side3 > $side1)) {

                    // Determine the type of triangle
                    if ($side1 == $side2 && $side2 == $side3) {
                        $result = "Tam giác đều";
                    } elseif ($side1 == $side2 || $side1 == $side3 || $side2 == $side3) {
                        $result = "Tam giác cân";
                    } else {
                        $result = "Tam giác thường";
                    }

                } else {
                    $error = "The sides do not form a valid triangle.";
                }

            } else {
                $error = "Please enter valid positive numeric values for all sides.";
            }
        }
        ?>

        <!-- Form -->
        <form method="POST" action="">
            <label for="side1">Cạnh 1 (cm):</label>
            <input type="number" id="side1" name="side1" min="1" required>

            <label for="side2">Cạnh 2 (cm):</label>
            <input type="number" id="side2" name="side2" min="1" required>

            <label for="side3">Cạnh 3 (cm):</label>
            <input type="number" id="side3" name="side3" min="1" required>

            <input type="submit" value="Nhận dạng">
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
