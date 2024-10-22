-- Tạo cơ sở dữ liệu QL_BAN_SUA
CREATE DATABASE QL_BAN_SUA;
USE QL_BAN_SUA;

-- Tạo bảng HANG_SUA
CREATE TABLE HANG_SUA (
    Ma_hang_sua VARCHAR(20) NOT NULL,
    Ten_hang_sua VARCHAR(100) NOT NULL,
    Dia_chi VARCHAR(200),
    Dien_thoai VARCHAR(20),
    Email VARCHAR(100),
    PRIMARY KEY (Ma_hang_sua)
) ENGINE=MyISAM;

-- Tạo bảng LOAI_SUA
CREATE TABLE LOAI_SUA (
    Ma_loai_sua VARCHAR(3) NOT NULL,
    Ten_loai VARCHAR(50) NOT NULL,
    PRIMARY KEY (Ma_loai_sua)
) ENGINE=MyISAM;

-- Tạo bảng SUA
CREATE TABLE SUA (
    Ma_sua VARCHAR(6) NOT NULL,
    Ten_sua VARCHAR(50) NOT NULL,
    Ma_hang_sua VARCHAR(20) NOT NULL,
    Ma_loai_sua VARCHAR(3) NOT NULL,
    Trong_luong INT,
    Don_gia INT,
    TP_dinh_duong TEXT,
    Loi_ich TEXT,
    Hinh VARCHAR(200),
    PRIMARY KEY (Ma_sua),
    FOREIGN KEY (Ma_hang_sua) REFERENCES HANG_SUA(Ma_hang_sua),
    FOREIGN KEY (Ma_loai_sua) REFERENCES LOAI_SUA(Ma_loai_sua)
) ENGINE=MyISAM;

-- Tạo bảng KHACH_HANG
CREATE TABLE KHACH_HANG (
    Ma_khach_hang VARCHAR(5) NOT NULL,
    Ten_khach_hang VARCHAR(100) NOT NULL,
    Phai TINYINT(1),
    Dia_chi VARCHAR(200),
    Dien_thoai VARCHAR(20),
    Email VARCHAR(100),
    PRIMARY KEY (Ma_khach_hang)
) ENGINE=MyISAM;

-- Tạo bảng HOA_DON
CREATE TABLE HOA_DON (
    So_hoa_don VARCHAR(5) NOT NULL,
    Ngay_HD DATE NOT NULL,
    Ma_khach_hang VARCHAR(5) NOT NULL,
    PRIMARY KEY (So_hoa_don),
    FOREIGN KEY (Ma_khach_hang) REFERENCES KHACH_HANG(Ma_khach_hang)
) ENGINE=MyISAM;

-- Tạo bảng CT_HOADON
CREATE TABLE CT_HOADON (
    So_hoa_don VARCHAR(5) NOT NULL,
    Ma_sua VARCHAR(6) NOT NULL,
    So_luong INT,
    Don_gia INT,
    PRIMARY KEY (So_hoa_don, Ma_sua),
    FOREIGN KEY (So_hoa_don) REFERENCES HOA_DON(So_hoa_don),
    FOREIGN KEY (Ma_sua) REFERENCES SUA(Ma_sua)
) ENGINE=MyISAM;

-- Thêm dữ liệu vào bảng KHACH_HANG
INSERT INTO KHACH_HANG (Ma_khach_hang, Ten_khach_hang, Phai, Dia_chi, Dien_thoai, Email) 
VALUES 
('kh009', 'Phan Anh', 0, '112 Trường Chinh – TP. Nam Định', '0350646234', 'phan_anh@yahoo.com');

-- Thêm dữ liệu vào bảng HANG_SUA
INSERT INTO HANG_SUA (Ma_hang_sua, Ten_hang_sua, Dia_chi, Dien_thoai, Email) 
VALUES 
('HS001', 'Vinamilk', 'TP.HCM', '0288888888', 'vinamilk@milk.vn'),
('HS002', 'TH True Milk', 'Nghệ An', '0233888888', 'thmilk@milk.vn');

-- Thêm dữ liệu vào bảng LOAI_SUA
INSERT INTO LOAI_SUA (Ma_loai_sua, Ten_loai) 
VALUES 
('L01', 'Sữa tươi'),
('L02', 'Sữa bột');

-- Thêm dữ liệu vào bảng SUA
INSERT INTO SUA (Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, TP_dinh_duong, Loi_ich, Hinh) 
VALUES 
('S001', 'Sữa Vinamilk 1L', 'HS001', 'L01', 1000, 20000, 'Protein, Vitamin A, D', 'Tăng chiều cao', 'vinamilk1l.jpg'),
('S002', 'Sữa TH True Milk 500ml', 'HS002', 'L01', 500, 15000, 'Protein, Vitamin D', 'Phát triển trí não', 'thtrue500ml.jpg');

-- Thêm dữ liệu vào bảng HOA_DON
INSERT INTO HOA_DON (So_hoa_don, Ngay_HD, Ma_khach_hang) 
VALUES 
('HD001', '2024-10-19', 'kh009');

-- Thêm dữ liệu vào bảng CT_HOADON
INSERT INTO CT_HOADON (So_hoa_don, Ma_sua, So_luong, Don_gia) 
VALUES 
('HD001', 'S001', 2, 20000);

---------------------------------------------------- BÀI 2 ----------------------------------------------------

--- YC1: Liệt kê danh sách hãng sữa gồm có tên hãng sữa, địa chỉ, điện thoại.
SELECT Ten_hang_sua, Dia_chi, Dien_thoai 
FROM HANG_SUA;

--- YC2: Liệt kê danh sách sữa gồm có tên sữa, trọng lượng, đơn giá. Có sắp xếp tăng theo cột tên sữa và sắp xếp giảm theo cột đơn giá.
SELECT Ten_sua, Trong_luong, Don_gia 
FROM SUA 
ORDER BY Ten_sua ASC, Don_gia DESC;

--- YC3: Liệt kê danh sách sữa gồm có tên sữa, trọng lượng, đơn giá, thành phần dinh dưỡng. Chỉ liệt kê các sữa có tên bắt đầu là “S”.
SELECT Ten_sua, Trong_luong, Don_gia, TP_dinh_duong 
FROM SUA 
WHERE Ten_sua LIKE 'S%';

--- YC4: Liệt kê danh sách sữa mà trong tên sữa có từ ‘grow’.
SELECT Ten_sua, Trong_luong, Don_gia 
FROM SUA 
WHERE Ten_sua LIKE '%grow%';

--- YC5: Liệt kê các sản phẩm sữa có trọng lượng là 180 gr, 200 gr hoặc 900 gr.
SELECT Ten_sua, Trong_luong, Don_gia 
FROM SUA 
WHERE Trong_luong IN (180, 200, 900);

--- YC6: Liệt kê danh sách sữa có trọng lượng lớn hơn hay bằng 900 gr hoặc mã hãng sữa là ‘DS’.
SELECT Ten_sua, Trong_luong, Don_gia 
FROM SUA 
WHERE Trong_luong >= 900 OR Ma_hang_sua = 'DS';

--- YC7: Liệt kê danh sách sữa có đơn giá lớn hơn 100000 đồng gồm các thông tin: tên sữa, đơn giá, trọng lượng; danh sách được sắp xếp theo thứ tự tên sữa giảm dần.
SELECT Ten_sua, Don_gia, Trong_luong 
FROM SUA 
WHERE Don_gia > 100000 
ORDER BY Ten_sua DESC;

--- YC8: Cho biết tên sữa, đơn giá, thành phần dinh dưỡng của 10 sữa có đơn giá cao nhất.
SELECT Ten_sua, Don_gia, TP_dinh_duong 
FROM SUA 
ORDER BY Don_gia DESC 
LIMIT 10;

--- YC9: Liệt kê danh sách các sữa của hãng Abbott có: tên sữa, trọng lượng, lợi ích; trong đó trọng lượng sắp xếp tăng dần.
SELECT Ten_sua, Trong_luong, Loi_ich 
FROM SUA 
WHERE Ma_hang_sua = 'HS009' 
ORDER BY Trong_luong ASC;

--- YC10: Cho biết 3 sản phẩm sữa của hãng Vinamilk có trọng lượng nặng nhất, gồm các thông tin: Tên sữa, trọng lượng.
SELECT Ten_sua, Trong_luong 
FROM SUA 
WHERE Ma_hang_sua = 'HS001' 
ORDER BY Trong_luong DESC 
LIMIT 3;

---------------------------------------------------- BÀI 3 ----------------------------------------------------
/*
YC1:
Cho biết giá trị trung bình của các hóa đơn được làm tròn đến hàng nghìn.
*/
SELECT ROUND(AVG(Don_gia), -3) AS Gia_tri_trung_binh
FROM HOA_DON;

/*
YC2:
Liệt kê danh sách các hóa đơn trong tháng 7 năm 2007.
*/
SELECT *
FROM HOA_DON
WHERE MONTH(Ngay_HD) = 7 AND YEAR(Ngay_HD) = 2007;

/*
YC3:
Liệt kê danh sách các hãng sữa có tên hãng sữa, địa chỉ, điện thoại, trong đó tên hãng sữa in HOA.
*/
SELECT UPPER(Ten_hang_sua) AS Ten_hang_sua, Dia_chi, Dien_thoai
FROM HANG_SUA;

/*
YC:
Liệt kê danh sách sữa đã bán được trong tháng 8 năm 2007 có tên sữa, trọng lượng, đơn giá; trong đó: trọng lượng có thêm ‘gr’, đơn giá có định dạng tiền tệ và có thêm ‘VNĐ’.
*/
SELECT Ten_sua, 
       CONCAT(Trong_luong, ' gr') AS Trong_luong, 
       CONCAT(FORMAT(Don_gia, 0), ' VNĐ') AS Don_gia
FROM SUA S
JOIN CT_HOADON CTH ON S.Ma_sua = CTH.Ma_sua
JOIN HOA_DON HD ON CTH.So_hoa_don = HD.So_hoa_don
WHERE MONTH(HD.Ngay_HD) = 8 AND YEAR(HD.Ngay_HD) = 2007;

/*
YC 5: 
Liệt kê danh sách sữa có trọng lượng từ 400 gr đến 500 gr; có thêm cột đánh giá như sau: nếu giá sữa nhỏ hơn 100000 VNĐ thì đánh giá là ‘Sữa trung bình’, nếu giá trên 100000 VNĐ thì đánh giá là ‘Sữa giá cao’.
*/
SELECT Ten_sua, Trong_luong, Don_gia, 
       IF(Don_gia < 100000, 'Sữa trung bình', 'Sữa giá cao') AS Danh_gia
FROM SUA
WHERE Trong_luong BETWEEN 400 AND 500;

/*
YC 6: 
Liệt kê danh sách hóa đơn kèm theo ngày được định dạng như sau ‘Thứ <tên thứ Tiếng Việt> ngày … tháng … năm ….’; sắp theo ngày tăng dần.
*/
SELECT So_hoa_don, 
       DATE_FORMAT(Ngay_HD, 'Thứ %W ngày %d tháng %m năm %Y') AS Ngay_Dinh_Dang
FROM HOA_DON
ORDER BY Ngay_HD ASC;

/*
YC7: 
Thống kê số khách hàng nam – Số khách hàng nữ và tổng số khách hàng.
*/
SELECT 
    SUM(Phai = 0) AS So_khach_hang_nam, 
    SUM(Phai = 1) AS So_khach_hang_nu, 
    COUNT(*) AS Tong_so_khach_hang
FROM KHACH_HANG;

---------------------------------------------------- BÀI 4 ----------------------------------------------------

/*
YC1:
Thống kê tổng sản phẩm theo hãng sữa, gồm các thông tin: tên hãng sữa, tổng số sản phẩm. Có sắp xếp tăng theo tổng số sản phẩm.
*/
SELECT HS.Ten_hang_sua, COUNT(S.Ma_sua) AS Tong_so_san_pham
FROM HANG_SUA HS
JOIN SUA S ON HS.Ma_hang_sua = S.Ma_hang_sua
GROUP BY HS.Ten_hang_sua
ORDER BY Tong_so_san_pham ASC;

/*
YC2:
Thống kê số sản phẩm bán được trong tháng 8/2007 của mỗi sữa.
*/
SELECT S.Ten_sua, SUM(CTH.So_luong) AS Tong_so_luong_ban
FROM SUA S
JOIN CT_HOADON CTH ON S.Ma_sua = CTH.Ma_sua
JOIN HOA_DON HD ON CTH.So_hoa_don = HD.So_hoa_don
WHERE MONTH(HD.Ngay_HD) = 8 AND YEAR(HD.Ngay_HD) = 2007
GROUP BY S.Ten_sua;

/*
YC3:
Hãy cho biết những hóa đơn mua hàng có tổng giá trị lớn hơn 2000000 VNĐ.
*/
SELECT HD.So_hoa_don, SUM(CTH.So_luong * CTH.Don_gia) AS Tong_gia_tri
FROM HOA_DON HD
JOIN CT_HOADON CTH ON HD.So_hoa_don = CTH.So_hoa_don
GROUP BY HD.So_hoa_don
HAVING SUM(CTH.So_luong * CTH.Don_gia) > 2000000;


---------------------------------------------------- BÀI 5 ----------------------------------------------------


/*
YC1:
Liệt kê các khách hàng chưa mua hàng.
*/
SELECT *
FROM KHACH_HANG KH
WHERE KH.Ma_khach_hang NOT IN (SELECT Ma_khach_hang FROM HOA_DON);

/*
YC2:
Liệt kê danh sách sữa có cùng hãng sữa với sữa có mã sữa là ‘AB0002’.
*/
SELECT *
FROM SUA
WHERE Ma_hang_sua = (SELECT Ma_hang_sua FROM SUA WHERE Ma_sua = 'AB0002');

---------------------------------------------------- BÀI 6 ----------------------------------------------------

/*
YC2:
Tạo ra một bảng mới có tên là bang_tam có cấu trúc giống như bảng SUA.
*/
CREATE TABLE bang_tam AS
SELECT * FROM SUA WHERE 1=0;

/*
YC3:
Tạo ra một bảng mới có tên là bang_Vinamilk có cấu trúc giống như bảng SUA.
*/
CREATE TABLE bang_Vinamilk AS
SELECT * FROM SUA WHERE 1=0;

---------------------------------------------------- BÀI 7 ----------------------------------------------------

/*
YC1:
Thêm một khách hàng mới vào bảng khách hàng.
*/
INSERT INTO KHACH_HANG (Ma_khach_hang, Ten_khach_hang, Phai, Dia_chi, Dien_thoai, Email)
VALUES ('KH007', 'Mai Anh', 1, '123 – Quang Trung – TP. Nam Định – Nam Định', '0912344455', 'mai_anh@gmail.com');

/*
YC2:
Thêm các thông tin có trong bảng SUA vào bảng bang_tam.
*/
INSERT INTO bang_tam (Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, TP_dinh_duong, Loi_ich, Hinh)
SELECT Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, TP_dinh_duong, Loi_ich, Hinh
FROM SUA;


---------------------------------------------------- BÀI 8 ----------------------------------------------------

/*
YC1:
Cập nhật lại đơn giá của sữa trong bang_tam theo công thức sau: đơn giá = đơn giá cũ + 3%.
*/
UPDATE bang_tam 
SET Don_gia = Don_gia * 1.03;

/*
YC2:
Tạo thêm cột Tri_gia cho bảng HOA_DON sau đó tính trị giá cho mỗi hóa đơn và cập nhật cho cột này.
*/
ALTER TABLE HOA_DON ADD COLUMN Tri_gia INT;
UPDATE HOA_DON HD
JOIN (
    SELECT So_hoa_don, SUM(So_luong * Don_gia) AS Tri_gia
    FROM CT_HOADON
    GROUP BY So_hoa_don
) CTH ON HD.So_hoa_don = CTH.So_hoa_don
SET HD.Tri_gia = CTH.Tri_gia;


---------------------------------------------------- BÀI 9 ----------------------------------------------------

/*
YC1:
Xóa khách hàng có mã khách hàng là ‘KH007’.
*/
DELETE FROM KHACH_HANG WHERE Ma_khach_hang = 'KH007';

/*
YC2:
Xóa những sữa có trọng lượng nhỏ hơn 200gr hoặc có đơn giá nhỏ hơn 10000 VNĐ trong bang_tam.
*/
DELETE FROM bang_tam 
WHERE Trong_luong < 200 OR Don_gia < 10000;

/*
YC3:
Xóa hãng sữa không có sản phẩm sữa nào.
*/
DELETE FROM HANG_SUA


