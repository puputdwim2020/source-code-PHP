<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan php</title>
</head>

<body>
    <?php
    echo "<b>contoh 1</b><br>";
    $a = 1;
    while ($a <= 10) {
        echo $a++;
    }
    echo "<br></br>";
    echo "<b>contoh 2</b><br>";
    $a = 1;
    while ($a <= 10) :
        echo "$a ";
        $a++;
    endwhile;
    echo "<br></br>";
    echo "<b>contoh 3</b><br>";
    $a = 1;
    while ($a <= 6) {
        echo "<h$a> heading $a</ha>";
        $a++;
    }
    ?>
</body>

</html>