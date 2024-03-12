<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["txtUserName"];
    $password = $_POST["txtpassword"];

    // Kiểm tra tên đăng nhập và mật khẩu
    if ($username == "admin" && $password == "admin") {
        echo "Đăng nhập thành công!";
    } else {
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu.";
    }
}
?>
