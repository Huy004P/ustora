<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>

<h2>Đăng nhập</h2>

<form method="post" action="process_login.php">
    <label for="username">Tài khoản:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Mật khẩu:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Đăng nhập">
</form>

<?php
// Kiểm tra xem dữ liệu đã được gửi đi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra xem có khớp với thông tin đăng nhập không (đây chỉ là ví dụ đơn giản)
    // Trong thực tế, bạn sẽ kiểm tra thông tin này từ cơ sở dữ liệu
    $correct_username = 'user'; // Tài khoản đúng
    $correct_password = 'password'; // Mật khẩu đúng

    if ($username === $correct_username && $password === $correct_password) {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
    } else {
        // Đăng nhập không thành công
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>

</body>
</html>
