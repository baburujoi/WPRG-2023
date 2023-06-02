<html>
<head>
    <title> Liczenie odwiedzin v 2  </title>
    <style>
        body {
            background-image: url("https://w0.peakpx.com/wallpaper/539/558/HD-wallpaper-little-white-fox-white-fur-lovely-little-fox.jpg");
        }
    </style>
</head>
<body>
<?php
$plik = fopen("zliczanie_3.txt","r");
$licznik = fgets($plik);
fclose($plik);

if(!isset($_COOKIE['visit'])) {
    setcookie('visit',1);
    $licznik++;
    $plik = fopen("zliczanie_3.txt","w");
    fwrite($plik, $licznik);
    fclose($plik);
}
echo"Ilość odwiedzin strony v 2 :  <b>$licznik</b>";
?>
</body>
</html>