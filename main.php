<?php
$a = [];
$a[0][0] = 1;
$a[0][1] = $a[0][0] *2;

#echo $a[0][1];
echo "<h2>AAAAAAAAAAAAAAAAHHHHHHHHHHHHHHHHHHHHHHHHHH</h2>";
$b = pi();
echo "<h1>",$b,"</h1>";

$a = 0;
$b = 0;
if($a>0 || $a<30){
    echo 'Zmienna mieści się w przedziale';
}
else{
    echo 'Nie mieśxi się w przedziale';
}
echo '<br>';
$active = false;

echo $active ? 'aktywna' : 'nieaktywna';
/*
Znak zapytania pełni funkcję polecenia if
Jest to skrócona instrukcja warunkowa
Zapis skrócony if:

            $result = (warunek) ? (wersja true) : (wersja false);
*/
?>