<!doctype html>
<html>
<!-- mysqli_query-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="card.css">
</head>
<body> 
      <div class="card">
          <?php
      
        $h1=$_POST["mahv"];
        $h2=$_POST["tenhv"];
        $h3=$_POST["sdt"];
        $h4=$_POST["khoahoc"];
        echo "Mã học viên:  ".$h1."<br>";
        echo "Tên học viên: ".$h2."<br>";
        echo "Số điện thoại:   ".$h3."<br>";
        echo "Khóa học:       ".$h4."<br>";
        
        $connect = mysqli_connect("localhost", "root", "", "qlhv");
        
        $sql="INSERT INTO hocvien VALUES('$h1','$h2','$h3','$h4')";
        
        $result=$connect -> query($sql);
        if($result){
            echo "THÊM VÀO CSDL THÀNH CÔNG";
        }
        else{
            echo "KHÔNG THÊM ĐƯỢC";
        }
        $connect ->close();
       
      ?>
      </div>
</body>
</html>