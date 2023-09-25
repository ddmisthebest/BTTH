<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

        echo "Tất cả các số từ 100 đến 200 và chia hết cho 5 trong mảng là: ";
        
        foreach ($array as $number) {
            if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
                echo $number . " ";
            }
        }
    ?>
</body>
</html>