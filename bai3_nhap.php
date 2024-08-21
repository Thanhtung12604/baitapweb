<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        .phep_tinh {
            display: flex;
            align-items: center; 
            gap: 20px; 
        }
        .phep_tinh1 {
            display: flex;
            align-items: center;
        }
        .phep_tinh1 input {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN 2 SỐ</h2>
    <form method="post" action="bai3_ketqua.php">
        <div class="phep_tinh">
            <p>Chọn phép tính:</p>
            <div class="phep_tinh1">
                <input type="radio" name="operation" value="Cộng"> Cộng
            </div>
            <div class="phep_tinh1">
                <input type="radio" name="operation" value="Trừ"> Trừ
            </div>
            <div class="phep_tinh1">
                <input type="radio" name="operation" value="Nhân"> Nhân
            </div>
            <div class="phep_tinh1">
                <input type="radio" name="operation" value="Chia"> Chia
            </div>
        </div>

        <label for="number1">Số thứ nhất:</label>
        <input type="text" id="number1" name="number1"><br><br>

        <label for="number2">Số thứ hai:</label>
        <input type="text" id="number2" name="number2"><br><br>
        
        <input type="submit" value="Tính">
    </form>
</body>
</html>
