<html>
<head>
    <title> Rozwiązania zadań </title>
    <style>
        body {
            background-image: url("https://loveandspecs.com/wp-content/uploads/2020/04/cute-spring-phone-wallpaper-background-yellow-and-pink-ranunculus-e1598490479100.png");
        }
    </style>
</head>
<body style="background-color: black ; color: lime">
<h1>ROZWIĄZANIA ZADAŃ Z ZAJĘĆ </h1>
<h3>zadanka 12 i 13 </h3>
<h3>zadanie 1.1 </h3>
<?php
session_start();
if (isset($_POST['id'])) {
    $_SESSION['id'] = $_POST['id'];
}
if (isset($_POST['imie'])) {
    $_SESSION['imie'] = $_POST['imie'];
}
if (isset($_POST['nazwisko'])) {
    $_SESSION['nazwisko'] = $_POST['nazwisko'];
}
if (isset($_POST['numerKarty'])){
    $_SESSION['numerKarty'] = $_POST['numerKarty'];
}
?>
<h3>Formularz do mam talent</h3>
<form name="zad1_1" method="post" action="1.1.php">
    First name<input type="text" name="imie" placeholder="Imie"><br>
    Last name<input type="text" name="nazwisko" placeholder="Nazwisko"><br>
    Card number<input type="text" name="numerKarty" placeholder="Numer karty"><br>
    Number <input type="number" name="id" placeholder="Id osoby"><br><br>
    <input type="submit" name="send" value="send">

</form>
<br><br>
<a href="1.2.php"><button>Next</button></a>
</body>
</html>