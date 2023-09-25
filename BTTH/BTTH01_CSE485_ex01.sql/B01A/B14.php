<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array1 = [
            [77, 87],
            [23, 45]
           ];
           
           $array2 = [
            'giá trị 1', 'giá trị 2'
           ];
           
           $result = [];
           
           foreach ($array1 as $key => $values) {
               $result[$key] = array_merge([$array2[$key]], $values);
           }
           
           print_r($result);           
    ?>
</body>
</html>