<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Mua Hoa</title>
    <style>
        body { 
    background-color: pink; 
    font-family: Arial, sans-serif; 
}

.container { 
    width: 400px; 
    margin: auto; 
    padding: 20px; 
    background-color: #FFC0CB; 
    border-radius: 10px; 
}

h1 { 
    text-align: center; 
    color: #FF4500; 
}

label { 
    display: block; 
    font-weight: bold; 
    margin-bottom: 10px; 
}

textarea { 
    width: 100%; 
    height: 100px; 
}

input[type="text"] { 
    width: calc(100% - 130px); 
    margin-right: 10px; 
}

input[type="submit"] { 
    width: 120px; 
    padding: 5px; 
}
    </style>
    
</head>
<body>
    <div class="container">
        <h1>MUA HOA</h1>
        <form action="mang_gio_hoa.php" method="post">
            <label>Loại hoa bạn chọn:</label>
            <input type="text" name="ten_hoa" required>
            <input type="submit" name="them_hoa" value="Thêm vào giỏ hoa">
            <label>Giỏ hoa của bạn có:</label>
            <textarea name="gio_hoa" readonly><?php echo isset($_POST['gio_hoa']) ? htmlspecialchars($_POST['gio_hoa']) : "-- Hồng đỏ -- Lys trắng -- Hồng trắng -- Kim thủy tùng -- Baby -- Salem -- Lá măng"; ?></textarea>
            <input type="hidden" name="gio_hoa" value="<?php echo isset($_POST['gio_hoa']) ? htmlspecialchars($_POST['gio_hoa']) : "-- Hồng đỏ -- Lys trắng -- Hồng trắng -- Kim thủy tùng -- Baby -- Salem -- Lá măng"; ?>">
        </form>
        <?php
        // Function to check if the flower is already in the basket
        function tim_hoa($ten_hoa, $mang_hoa) {
            $kq = 0;
            foreach ($mang_hoa as $hoa) {
                if (strcasecmp(trim($hoa), trim($ten_hoa)) == 0) {
                    $kq = 1;
                    break;
                }
            }
            return $kq;
        }

        if (isset($_POST['them_hoa'])) {
            $ten_hoa = trim($_POST['ten_hoa']);
            $gio_hoa = isset($_POST['gio_hoa']) ? $_POST['gio_hoa'] : "";

            // Convert the text area value into an array
            $mang_hoa = array_map('trim', explode('--', $gio_hoa));

            // Check if the flower is already in the basket
            if (tim_hoa($ten_hoa, $mang_hoa) == 1) {
                echo "<p style='color: red;'>Hoa này đã có trong giỏ!</p>";
            } else {
                // Add the new flower to the basket
                $gio_hoa .= " -- " . $ten_hoa;
                echo "<p style='color: green;'>Đã thêm hoa vào giỏ!</p>";
            }

            // Output the updated flower basket
            echo '<form action="mang_gio_hoa.php" method="post">';
            echo '<textarea name="gio_hoa" readonly>' . htmlspecialchars($gio_hoa) . '</textarea>';
            echo '<input type="hidden" name="gio_hoa" value="' . htmlspecialchars($gio_hoa) . '">';
            echo '</form>';
        }
        ?>
    </div>
</body>
</html>
