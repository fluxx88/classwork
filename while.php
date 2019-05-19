<?php
echo "Введите первое число:";
$usersNumber=(int)trim(fgets(STDIN));

for ($i=1; $i<=10;$i++){

    echo "$usersNumber *$i =". $usersNumber*$i ."\n"; //точка означает сложение двух строк(конкатенация)

}