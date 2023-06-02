<html>
<head>
    <title> Stronka druga </title>
    <style>
        body {
            background-image: url("https://e0.pxfuel.com/wallpapers/477/471/desktop-wallpaper-mariana-serrano-on-iphone6s-cute-summer.jpg");
        }
    </style>
</head>
<body style="background-color: black ; color: lime">
<h3>zadanka 12 i 13 </h3>
<h3>zadanie 1.2 </h3>
<?php
session_start();

if (isset($_POST['imiona'])){
    $_SESSION['imiona'] = $_POST['imiona'];
}
if (isset($_POST['nazwiska'])){
    $_SESSION['nazwiska'] = $_POST['nazwiska'];
}
?>
<form name="drugi" method="post" action="1.2.php">
    <?php
    for ($i = 0; $i < $_SESSION['id']; $i++) {
        echo (($i+1)."   osoba na stronie  ");
        echo "<input type=\"text\" name=\"imiona[]\" placeholder=\"Imiona\">";
        echo "<input type=\"text\" name=\"nazwiska[]\" placeholder=\"Nazwiska\"><br>";
    }
    ?>
    <input type="submit" name="send" value="send">

</form>
<br><br>
<a href="1.3.php"><button>Next</button></a>
</body>
</html>
