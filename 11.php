<?php
<?php
$hello = "Hello world!";//эта переменная типа "Строка"
$a=2;# Эта переменная типа "число"
$b=2;
$c=$a+$b;
/*Разбираемся с коммент
Первое-строка
Второе-целое число
*/
$half=0.5;//Переменная типа "Дробное число"
$moreThan=$a>$half;//Переменная типа "Boolean" имеет только два значения(true or false)
echo "Введите число(от 0 до 100):";
$usersNumber=(int)trim(fgets(STDIN));
if ($usersNumber>100 or $usersNumber<0) {
    echo "Число должно быть меньше 100 и больше 0";
    die();// команда отвечает остановить выполнение программы(либоожем писать die)
}
echo $usersNumber+$c ;