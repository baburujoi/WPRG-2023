<?php
session_start();
if (isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}else{
    $id=0;
}
?>
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
<h3>zadanka 14 i 15 </h3>
<?php
if ($id !=0){
    ?>
    <ul class="nav nav-pills ms-auto flex-nowrap">
        <li class="nav-item"><a class="nav-link" href="lab7.php">Strona Główna</a></li>
        <li class="nav-item"><a class="nav-link" href="all_car.php">Autka</a></li>
        <li class="nav-item"><a class="nav-link" href="add_car.php">Dodaj Autko</a></li>
        <li class="nav-item"><a class="nav-link" href="my_car.php">Moje Autko</a></li>
        <li class="nav-item"><a class="nav-link" href=logout.php ><?php echo $_SESSION['userName'] ?></a></li>
    </ul>
    <?php
}else{
    ?>
    <ul class="nav nav-pills ms-auto flex-nowrap">
        <li class="nav-item"><a class="nav-link" href="lab7.php">Strona Główna</a></li>
        <li class="nav-item"><a class="nav-link" href="all_car.php">Autka</a></li>
        <li class="nav-item"><a class="nav-link" href="add_car.php">Dodaj Autko</a></li>
        <li class="nav-item"><a class="nav-link" href="signup.php">Rejestracja</a></li>
        <li class="nav-item"><a class="nav-link" href=login.php>Logowanie</a></li>
    </ul>

    <?php
}
require_once 'home.php';
?>
</body>
</html>