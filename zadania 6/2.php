<html>
<head>
    <title> Liczenie odwiedzin </title>
    <style>
        body {
            background-image: url("https://w.forfun.com/fetch/ab/aba6eb676b58a4a4ce74dc2b4886d620.jpeg");
        }
    </style>
</head>
<body>
<?php
$plik = fopen("zliczanie.txt","r");
$licznik = fgets($plik);
fclose($plik);

if(!isset($_COOKIE['visit'])) {
    setcookie('visit',$licznik ,time()-60);
    $licznik++;
    $plik = fopen("zliczanie.txt","w");
    fwrite($plik, $licznik);
    fclose($plik);
}
echo"Ilość odwiedzin strony :  <b>$licznik</b>";
?>
</body>
</html>