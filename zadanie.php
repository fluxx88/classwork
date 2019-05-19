<?php
{
    echo "Введите число: ";
    $n=(int)trim(fgets(STDIN));
    $allNumber=array();//Переменная типа "Массив"

}
while ($n !=0) {
    $allNumber []=$n; //[]это означает что мы создадим новый элемент
    echo "Введите число: ";
    $n=(int)trim(fgets(STDIN));
}
$max=0;

foreach($allNumber as $number) {//фоорич для каждого элемента аллнамбер
  if ($number>$max) {
      $max=$number;
  }

}
echo "Максимальное число:$max";