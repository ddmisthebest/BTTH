<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = ['a' => ['b' => 0,'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3]]];
    
    // Lấy giá trị có key "b" và giá trị bằng 3
    $valueB = $a['b']['o']['b'];

        // Lấy giá trị có key "c" và giá trị bằng 1
    $valueC = $a['a']['c'];

        // Lấy thông tin của phần tử có key "a"
    $infoA = $a['a'];

        // In các giá trị và thông tin lấy được
    echo"Giá trị = 3 mà có key là b từ mảng trên là:<br>";
    echo "Giá trị có key 'b': $valueB<br>";

    echo"Giá trị = 1 mà có key là c từ mảng trên là:<br>";
    echo "Giá trị có key 'c': $valueC<br>";

    echo"Thông tin của phần tử có key là a là:<br>";
    echo "Thông tin phần tử có key 'a':<pre>";
    print_r($infoA);
    echo "</pre>";
     ?>  





</body>
</html>