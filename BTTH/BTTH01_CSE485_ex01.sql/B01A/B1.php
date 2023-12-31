<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

// Tính tổng các phần tử trong mảng
$sum = array_sum($arrs);

// Tính tích các phần tử trong mảng
$product = array_product($arrs);

// Tính hiệu các phần tử trong mảng
$diff = $arrs[0]; // Sử dụng phần tử đầu tiên làm giá trị ban đầu
for ($i = 1; $i < count($arrs); $i++) {
    $diff -= $arrs[$i];
}

// Tính thương các phần tử trong mảng
$quotient = $arrs[0]; // Sử dụng phần tử đầu tiên làm giá trị ban đầu
for ($i = 1; $i < count($arrs); $i++) {
    if ($arrs[$i] != 0) {
        $quotient /= $arrs[$i]; // Tránh chia cho 0
    } else {
        echo "Chia cho 0 xảy ra!";
        exit();
    }
}

// Hiển thị kết quả dưới dạng số thập phân
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "<br>";
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . number_format($quotient, 10) . "<br>";
?>

</body>
</html>
