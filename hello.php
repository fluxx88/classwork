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
echo "Введите первое число:";
$usersNumber=(int)trim(fgets(STDIN));
echo "Введите второе число :";
$usersNumber2=(int)trim(fgets(STDIN));
echo "Введите оператор :";
$usersOperator=trim(fgets(STDIN));
if ($usersOperator=="+") {
    echo $usersNumber+$usersNumber2;
    die();
}
if ($usersOperator=="-") {
    echo $usersNumber-$usersNumber2;
    die();
}
if ($usersOperator=="*") {
    echo $usersNumber*$usersNumber2;
    die();
    if ($usersOperator=="/") {
        echo $usersNumber/$usersNumber2;
        die();