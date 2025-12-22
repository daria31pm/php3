<?php
 declare(strict_types=1);

 /**
  * Применяет функцию к каждому элементу массива.
  *
  * @param array &$arr Массив.
  * @param callable $callback Функция.
  */
function map(array $arr, callable $callback): array {
    $result = [];
    foreach ($arr as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

 /**
  * Возводит число в квадрат.
  *
  * @param float|int $a Число.
  *
  * @return float|int Квадрат $a.
  */
 $square = fn(float|int $a): float|int => $a * $a;

 $nums = [31, 32, 33, 34, 35, 36, 37, 38, 39, 40];
 
 $squared = map($nums, $square);

 echo 'Квадраты чисел от 31 до 40: ';
 foreach($squared as $i) {
     echo $i, ($i != $squared[count($squared) - 1]) ? ', ' : '.';
 }

?>