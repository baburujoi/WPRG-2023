<html>
<head>
    <title> Rozwiązania zadań </title>
    <style>
        body {
    background-image: url("https://media.tenor.com/P49xhh2DMcMAAAAM/fortnite-funny-dance.gif");
        }
    </style>
</head>
<body style="background-color: black ; color: lime">
<h1>ROZWIĄZANIA ZADAŃ Z ZAJĘĆ </h1>
<h3>zadanka 1 </h3>

<?php

function dice_symulator (){
    return (rand(1,6));
}
function diameter (){
    $radius = 4.2;
    $diameter = (2*$radius) ;
    return($diameter);
}
function triangle ( ){
    $base = 2;
    $heightTriangle = 4;
    $fieldTriangle = (($base * $heightTriangle)/2);
    return $fieldTriangle;
}
function trapeze (){
    $baseA = 5;
    $baseB = 8;
    $heightTrapeze = 2;
    $fieldTrapeze = ((($baseA + $baseB) * $heightTrapeze) /2);
    return $fieldTrapeze;
}
function rectangle (){
    $baseA = 10;
    $heightRectangle = 2;
    $fieldRectangle = ($baseA * $heightRectangle);
    return $fieldRectangle;
}
function filter($array, $sentance) {
    foreach($array as $acces) {
        $censour = str_repeat("*", strlen($acces));
        $sentance = str_ireplace($acces, $censour, $sentance);
    }
    return $sentance;
}

echo("<p>zadanie 1.1 </p>");
echo("liczba oczek : ");
echo(dice_symulator());

echo("<p> zadanie 1.2 </p>");
echo(diameter());

echo("<p> zadanie 1.3 </p>");
$tab = array("kuwa", "japierpapier", "motyla noga", "psiakostka", "kurcze blade","oil","gneurshk","furry");
$joined_arr = join(", ", $tab);
$sentance = "dzisiaj rano spoktała mnie motyla noga, o kurcze blade, pomyślałam.Ktoś znowu wlewa oil do oceanu i tak powstaną furry. Stwierdziłam, że wsumie to gneurshk i poszłam dalej spać.";
$censoured = filter($tab, $sentance);
echo("<p> zdanie przed cenzurą : ".$sentance." a po cenzurze : ".$censoured."</p>");

echo("<p> zadanie 1.4 </p>");

echo("<p> zadanie 1.5 </p>");
echo( "1) Trójkąt \n"."2) Prostokąt \n". "3) Trapez \n");
$figure = 1;
switch ($figure) {
    case 1:
        echo("<p>Pole trójkąta = ".triangle()."</p>");
        break;
    case 2:
        echo("<p>Pole trapezu = ".rectangle()."</p>");
        break;
    case 3:
        echo("<p>Pole prostokąta = ".trapeze()."</p>");
        break;
    default:
        echo ( "<p>nie ma takiej figury na liście !</p>");
        break;
}
?>
<h3>zadanka 2</h3>
<?php
function nationalities ($country) {
    $nationality = array(
        "Japan" => "Japansese",
        "Poland" => "Polish",
        "Australia" => "Australian",
        "Korea" => "Korean",
        "Watykan"=>"Vatican",
    );
    return $nationality[$country];
}
echo("<p>". " zadanie 2.1 "."</p>");
$tablica=[];
$min = 0;
$max = 100;
for($i = 0;$i < 10; $i++){
    $tablica[$i]=rand($min,$max);
}
echo ("<p>". "3 element tablicy  = ". $tablica[2]);
echo("<p>". " zadanie 2.2 "."</p>");
$country = "Watykan";
$inhabitant = nationalities($country);
echo("<p>Państwo : ".$country." narodowośc : ".$inhabitant."</p>");


echo("<p>". " zadanie 3.1 "."</p>");
$tablica2=[];
$min = 0;
$max = 100;
$tak = NULL;
for($i = 0;$i < 10; $i++){
    $tablica2[$i]=rand($min,$max);
}
for ($j = 0;$j<10;$j++){
    if ($tablica2[$j]>$tak){
        $tak = $tablica2[$j];
    }    
}
echo("<p>".$tak."</p>");
$tak = NULL;
while ($j <10){
    if ($tablica2[$j]>$tak){
        $tak = $tablica2[$j];
    }    
    $j++;
}
echo("<p>".$tak."</p>");
$tak = NULL;
$k=0;
do {
    if ($tablica2[$k]>$tak){
        $tak = $tablica2[$k];
    } 
    $k++;   
}
while ( $k<9);
echo("<p>".$tak."</p>");
$tak = NULL;
foreach ($tablica2 as $value){
    if ($value > $tak){
        $tak = $value;
    }
}
echo("<p>".$tak."</p>");
echo("<p>"."zadanie 3.2"."</p>");

function dice_symulator2 ($number){
    $rzuty=array();
    for ($l=0;$l<$number;$l++){
        $rzuty[$l]=rand(1,6);
    }
    return $rzuty;
}
$dice = dice_symulator2(3);
print_r($dice);
echo("<p>"."zadanie 3.3"."</p>");
function multiplication ($size){
    for ($i=1;$i<=$size;$i++){
        for ($j=1;$j<=$size;$j++){
            $equality=($i*$j);
            echo($equality." ");
        }
        echo("</br>");
    }
}
echo(multiplication(20));
?>    
</body>
</html>