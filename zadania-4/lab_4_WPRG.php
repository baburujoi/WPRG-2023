<html>
    <head>
        <title> Rozwiązania zadań </title>
        <style>
            body {
                background-image: url("https://gifdb.com/images/file/cute-anime-girl-noela-nya-3jd80r3o05097vdm.gif");
            }
        </style>
</head>
        <body style="background-color: black ; color: palevioletred">
            <h1>ROZWIĄZANIA ZADAŃ Z ZAJĘĆ </h1>
            <h3>Rozdział 9 </h3>
            <h4>zadanie 1</h4>

            <form method="get">
		<label for="birthdate">Data urodzenia:</label>
		<input type="date" id="birthdate" name="birthdate" required>
		<button type="submit">Oblicz dni do urodzin</button>
	</form>

	<?php
		if (isset($_GET['birthdate'])) {
			$birthdate = $_GET['birthdate'];
			$birthday = new DateTime($birthdate);
			$today = new DateTime();
			$age = $birthday->diff($today)->y;
			$nextBirthday = new DateTime();
			$nextBirthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));
			if ($nextBirthday < $today) {
				$nextBirthday->modify('+1 year');
			}
			$daysToBirthday = $nextBirthday->diff($today)->days;
			$dayOfWeek = $birthday->format('l');
			echo "<p>Urodziłeś/aś się w dniu $dayOfWeek.</p>";
			echo "<p>Obecnie masz $age lat.</p>";
			echo "<p>Do Twoich kolejnych urodzin pozostało $daysToBirthday dni.</p>";
		}
	?>

            <h4>zadanie 2</h4>
<?php
            

            function silnia_rekurencyjnie($num)
            {
               if($num < 2) 
                  return 1;
               else
                  return $num*silnia_rekurencyjnie($num-1);  
            }
            function silnia_iteracyjnie($num){
                $silnia2=1;
                for ($i=$num; $i>1; $i--){
                    $silnia2*=$i;
                }
                return $silnia2;
            }

            $num = 4;
            echo("<p>".$num." silnia rekurencyjnie to ".silnia_rekurencyjnie($num)."</p>");
            $num = 4;
            echo("<p>".$num." silnia iteracyjnie to ".silnia_iteracyjnie($num)."</p>");

            $timef1 = microtime(true);
            $num = 4;
            silnia_iteracyjnie($num);
            $timef2 = microtime(true);
            $normtime =round($timef2 - $timef1,4);
            $timer1 = microtime(true);
            $num = 4;
            silnia_rekurencyjnie($num);
            $timer2 = microtime(true);
            $rektime =round($timer2 - $timer1,4);
            $diff=1;
            if ( $normtime > $rektime){$diff = round ($normtime - $rektime,4);
                echo("<p> wersja rekurencyjna szybsza o ".$diff." sekund </p>");
            }
            else {$diff = round($rektime - $normtime,4);
                echo("<p> wersja iteracyjna szybsza o ".$diff." sekund </p>");
            }

            ?>
            
        </body>
</html>
