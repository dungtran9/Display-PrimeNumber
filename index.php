<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Hiển thị số nguyên tố</h2>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
<input type="text" name="number"><br>
<input type="submit" value="Find"><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $N=$_POST["number"];
    function isPrimeNumber($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $count = 0;
    $i = 2;
    echo "Các số nguyên tố là <br>";
    while ($count < $N) {
        if (isPrimeNumber($i) == true) {
            echo($i . " ");
            $count++;
        }
        $i++;
    }
}
?>
</body>
</html>
