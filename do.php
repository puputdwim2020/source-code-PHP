<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while</title>
</head>

<body>
    <?php
    echo "<h2> mencetak bilangan ganjil</h2>";
    $a = 1;
    do {
        echo "$a";
        $a += 2;
    } while ($a <= 20);
    ?>
</body>

</html>