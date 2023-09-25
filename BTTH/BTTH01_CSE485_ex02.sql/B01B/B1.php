<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";  // Địa chỉ máy chủ MySQL
        $username = "root";         // Tên người dùng MySQL (thường là root)
        $password = "";             // Mật khẩu MySQL (để trống mật khẩu mặc định)

        // Tạo kết nối đến MySQL
        $conn = new mysqli($servername, $username, $password);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
        }

        // Tạo cơ sở dữ liệu "BTTH01_CSE485"
        $sql = "CREATE DATABASE BTTH01_CSE485";
        if ($conn->query($sql) === TRUE) {
            echo "Cơ sở dữ liệu đã được tạo thành công";
        } else {
            echo "Lỗi khi tạo cơ sở dữ liệu: " . $conn->error;
        }

        // Đóng kết nối
        $conn->close();
    ?>
</body>
</html>
