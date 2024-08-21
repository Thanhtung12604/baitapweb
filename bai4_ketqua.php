<?php
require 'bai4_ham.php'; 
$socantim = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Mảng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #ccc 1px solid;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Array Function</h1>
    </header>
    <div class="container">
        <div class="content">
            <p><span class="highlight">Mảng ban đầu:</span> <?php echo implode(", ", $mang); ?></p>
            <p><span class="highlight">Giá trị lớn nhất trong mảng:</span> <?php echo lonnhat($mang); ?></p>
            <p><span class="highlight">Giá trị nhỏ nhất trong mảng:</span> <?php echo nhonhat($mang); ?></p>
            <p><span class="highlight">Tổng các phần tử trong mảng:</span> <?php echo tong($mang); ?></p>
            <p><span class="highlight">Mảng sau khi sắp xếp:</span> <?php echo implode(", ", sapxep($mang)); ?></p>
            <p><span class="highlight"><?php echo timkiem($mang, $socantim); ?></span></p>
        </div>
    </div>
</body>
</html>
