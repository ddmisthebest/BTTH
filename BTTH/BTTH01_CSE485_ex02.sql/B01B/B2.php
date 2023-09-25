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
    $username = "root";         // Tên người dùng MySQL
    $password = "";             // Mật khẩu MySQL (để trống mật khẩu mặc định)

    // Tạo kết nối đến MySQL
    $conn = new mysqli($servername, $username, $password);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
    }

    // Tên cơ sở dữ liệu bạn muốn tạo bảng
    $database_name = "BTTH01_CSE485_ex02";

    // Sử dụng cơ sở dữ liệu đã chọn
    $sql = "USE $database_name";
    if ($conn->query($sql) === TRUE) {
        echo "Sử dụng cơ sở dữ liệu thành công<br>";

        // Tạo bảng Thể loại
        $sql = "CREATE TABLE theloai (
            ma_tloai INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            ten_tloai VARCHAR(50) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Tạo bảng Thể loại thành công<br>";
        } else {
            echo "Lỗi khi tạo bảng Thể loại: " . $conn->error;
        }

        // Tạo bảng Tác giả
        $sql = "CREATE TABLE tacgia (
            ma_tgia INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            ten_tgia VARCHAR(100) NOT NULL,
            hinh_tgia VARCHAR(100)
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Tạo bảng Tác giả thành công<br>";
        } else {
            echo "Lỗi khi tạo bảng Tác giả: " . $conn->error;
        }

        // Tạo bảng Bài viết
        $sql = "CREATE TABLE baiviet (
            ma_bviet INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            tieude VARCHAR(200) NOT NULL,
            ten_bhat VARCHAR(100) NOT NULL,
            ma_tloai INT UNSIGNED NOT NULL,
            tomtat TEXT NOT NULL,
            noidung TEXT,
            ma_tgia INT UNSIGNED NOT NULL,
            ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP,
            hinhanh VARCHAR(200)
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Tạo bảng Bài viết thành công<br>";
        } else {
            echo "Lỗi khi tạo bảng Bài viết: " . $conn->error;
        }
    } else {
        echo "Lỗi khi sử dụng cơ sở dữ liệu: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
    ?>

</body>
</html>