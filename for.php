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
    for ($a = 1; $a <= 10; $a++) {
        echo "$a ";
    }
    echo "<br></br>";
    echo "<b>contoh 2</b></br>";
    for ($a = 1;; $a++) {
        if ($a > 10) {
            break;
        }
        echo "$a ";
    }

    echo "<br></br>";
    echo "<b>contoh 3</b><br>";
    for ($a = 1; $a <= 10; print "$a ", $a++);
    ?>
</body>

</html>