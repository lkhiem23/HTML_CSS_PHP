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
      //- thu vào trang add_SV.php
        $h1=$_POST["mgv"];
        $h2=$_POST["ten"];
        $h3=$_POST["lvl"];
        $h4=$_POST["mon"];
        echo "Mã giáo viên:  ".$h1."<br>";
        echo "Tên giáo viên: ".$h2."<br>";
        echo "Trình độ CM:   ".$h3."<br>";
        echo "Môn dạy:       ".$h4."<br>";
        //- kết nối csdl
        $connect = mysqli_connect("localhost", "root", "", "qlgv");
        //"" ở vị trí số 3 là chỗ mật khẩu, nếu k đặt thì để trống
        $sql="INSERT INTO giaovien VALUES('$h1','$h2','$h3','$h4')";
        //****lệnh insert phải viết hoa****
        $result=$connect -> query($sql);
        if($result){
            echo "THÊM VÀO CSDL THÀNH CÔNG";
        }
        else{
            echo "KHÔNG THÊM ĐƯỢC";
        }
        $connect ->close();
        //đóng kết nối
      ?>
      </div>
</body>
</html>