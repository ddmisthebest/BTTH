<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $keys = array(
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
       );
       $values = array(
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
       );

       $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );
    
    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );
    
    $combinedKeys = array_values($keys);
    $combinedValues = array_values($values);
    
    $keysAndValues = array_combine($combinedKeys, $combinedValues);
    
    print_r($keysAndValues);
    
    ?>
       
</body>
</html>