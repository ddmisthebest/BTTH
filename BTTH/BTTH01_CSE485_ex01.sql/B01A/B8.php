<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

        $maxLength = 0;
        $minLength = PHP_INT_MAX;
        $longestString = '';
        $shortestString = '';
        
        foreach ($array as $string) {
            $length = strlen($string);
            
            // Tìm chuỗi có độ dài lớn nhất
            if ($length > $maxLength) {
                $maxLength = $length;
                $longestString = $string;
            }
            
            // Tìm chuỗi có độ dài nhỏ nhất
            if ($length < $minLength) {
                $minLength = $length;
                $shortestString = $string;
            }
        }
        
        echo "Chuỗi lớn nhất là $longestString, độ dài = $maxLength<br>";
        echo "Chuỗi nhỏ nhất là $shortestString, độ dài = $minLength";
    ?>    
</body>
</html>