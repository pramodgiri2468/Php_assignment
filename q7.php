<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $whatsit = "Hello";
    echo "<h3>Value is " . gettype($whatsit) . ".</h3>";

    $whatsit = 3.14;
    echo "<h3>Value is " . gettype($whatsit) . ".</h3>";

    $whatsit = true;
    echo "<h3>Value is " . gettype($whatsit) . ".</h3>";

    $whatsit = 42;
    echo "<h3>Value is " . gettype($whatsit) . ".</h3>";

    $whatsit = NULL;
    echo "<h3>Value is " . gettype($whatsit) . ".</h3>";
    

    ?>
</body>
</html>