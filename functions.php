<?php
declare(strict_types=1);

/**
 * Анонимная функция для обмена значений переменных
 * @param mixed $a Первая переменная (передается по ссылке)
 * @param mixed $b Вторая переменная (передается по ссылке)
 * @return void
 */
$swap = function (&$a, &$b): void {
    $temp = $a;
    $a = $b;
    $b = $temp;
};

// Пример использования
$a = 5;
$b = 8;
echo "До обмена: a = $a, b = $b<br>";
$swap($a, $b);
echo "После обмена: a = $a, b = $b<br>";

/**
 * Функция map применяет коллбэк к каждому элементу массива
 * @param array $array Исходный массив
 * @param callable $callback Функция обратного вызова
 * @return array Новый массив с примененным коллбэком
 */
function map(array $array, callable $callback): array {
    $result = [];
    foreach ($array as $value) {
        $result[] = $callback($value);
    }
    return $result;
}

// Пример использования с стрелочной функцией
$numbers = [1, 2, 3, 4, 5];
$squared = map($numbers, fn($n) => $n * $n);
echo "Исходный массив: " . implode(', ', $numbers) . "<br>";
echo "Квадраты: " . implode(', ', $squared) . "<br>";
?>
