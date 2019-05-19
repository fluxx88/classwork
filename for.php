<?php
echo "Введите количество выполнений:";
$usersNumber=(int)trim(fgets(STDIN));
if ($usersNumber <2) {
    echo "Число должно быть больше 2";
    die();
}
$first=1;
$second=1;
echo $first . "\n";
echo $second . "\n";

for ($i=2;$i<$usersNumber; $i++){
    $currentNumber=$first + $second;
    $second=$first;
    $first=$currentNumber;
    echo $currentNumber."\n";
}
echo $first."\n";
//1 1 2 3 5 8 13....