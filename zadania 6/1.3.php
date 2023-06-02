<html>
<head>
    <title> Stronka trzecia </title>
    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/flower-background-desktop-wallpaper-cute-vector_53876-136877.jpg?w=360");
        }
    </style>
</head>
<body>
<?php
session_start();
echo "Imię : ". $_SESSION['imię']."<br>";
echo "Nazwisko : ". $_SESSION['nazwisko']."<br>";
echo "Numer karty : ". $_SESSION['numerKarty']."<br>";

for ($i = 0; $i < $_SESSION['id']; $i++) {
    echo ($i+1) . " Osoba : <br> Imię ".$_SESSION['imiona'][$i]." Nazwisko : ".$_SESSION['nazwiska'][$i]."<br>";
}
?>
<br><br>
<a href="ex%201.php"><button>Strona główna ^^ </button></a>
<?php
session_destroy();
?>
</body>
</html>