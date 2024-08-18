<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
            <form method="post" action="">
            <label>Chọn phép tính:</label>
            <input type="radio" name="operation" value="cong" required> Cộng
            <input type="radio" name="operation" value="tru" required> Trừ
            <input type="radio" name="operation" value="nhan" required> Nhân
            <input type="radio" name="operation" value="chia" required> Chia
            <input type="radio" name="operation" value="nguyento" required> Kiểm tra nguyên tố
            <input type="radio" name="operation" value="chanle" required> Kiểm tra chẵn/lẻ
            <br><br>

            <label>Số thứ nhất:</label>
            <input type="number" name="soThuNhat" required>
            <br><br>

            <label>Số thứ hai:</label>
            <input type="number" name="soThuHai" required>
            <br><br>

            <input type="submit" value="Tính">
        </form>
    </body>
</html>