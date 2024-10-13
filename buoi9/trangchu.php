<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
</head>
<body>
    <!-- Thêm class="login" cho thẻ <a> -->
    <div class="main"><a href="#" class="login">Đăng nhập</a></div>
</body>
<script>
    $(document).ready(function(){
        // Thêm class login vào thẻ <a> để sự kiện click hoạt động
        $(".login").click(function(event){
            event.preventDefault(); // Ngăn việc tải lại trang do href="#"
            $(".main").load("loginform.php");
        });
    })
</script>
</html>
