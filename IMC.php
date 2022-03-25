<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

 
$cont = $num1*$num1  ;
$cont2 = $num2/$cont ;
$cont3 = number_format($cont2,2);
echo "Seu IMC é $cont3 <br>";

if ($cont2 <= 18) {
	echo "Cuidado você está magro demais.<br>";
} elseif ($cont2 >= 18 and $cont2 < 24) {
	echo "Seu IMC está normal.<br>";
} elseif ($cont2 >= 24 and $cont2 < 30) {
	echo "Você está Sobrepeso.<br>";
} elseif ($cont2 >= 30) {
	echo "Você está com Obesidade.<br>";
}

echo "<br>Magreza, quando o resultado é menor que 18,5 kg;<br>
Normal, quando o resultado está entre 18,5 e 24,9 kg;<br>
Sobrepeso, quando o resultado está entre 24,9 e 30 kg;<br>
Obesidade, quando o resultado é maior que 30 kg<br>";
