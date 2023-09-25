<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];

    // Tạo một mảng tên người yêu thích màu
    $nguoi_yeu_thich_mau = [
        'Anh' => $arrs[0],
        'Sơn' => $arrs[3],
        'Thắng' => $arrs[2],
        'tôi' => $arrs[1]
    ];

    // Khởi tạo một chuỗi rỗng
    $ket_qua = '';

    // Duyệt qua mảng nguoi_yeu_thich_mau và tạo chuỗi kết quả
    foreach ($nguoi_yeu_thich_mau as $nguoi => $mau) {
        $ket_qua .= "Màu $mau là màu yêu thích của $nguoi, ";
    }

    // Loại bỏ dấu phẩy và khoảng trắng ở cuối chuỗi
    $ket_qua = rtrim($ket_qua, ', ');

    echo $ket_qua;
    ?>
</body>
</html>