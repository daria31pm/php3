<?php
declare(strict_types=1);

/**
 * Функция для отрисовки таблицы умножения
 * @param int $cols Количество столбцов (по умолчанию 5)
 * @param int $rows Количество строк (по умолчанию 5)
 * @param string $color Цвет заголовков (по умолчанию 'yellow')
 * @return int Количество вызовов функции
 */
function getTable(int $cols = 5, int $rows = 5, string $color = 'yellow'): int {
    static $count = 0;
    $count++;
    
    $colorStyle = $color === 'yellow' ? 'background-color: yellow;' : "background-color: $color;";
    
    echo "<table>";
    
    // Первая строка с заголовками столбцов
    echo "<tr>";
    echo "<th style='$colorStyle'></th>";
    for ($col = 1; $col <= $cols; $col++) {
        echo "<th style='$colorStyle'>$col</th>";
    }
    echo "</tr>";
    
    // Основные строки таблицы
    for ($row = 1; $row <= $rows; $row++) {
        echo "<tr>";
        // Первая ячейка в строке - заголовок строки
        echo "<th style='$colorStyle'>$row</th>";
        
        // Ячейки с произведениями
        for ($col = 1; $col <= $cols; $col++) {
            $product = $row * $col;
            echo "<td>$product</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    
    return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body> 
    <h1>Таблица умножения</h1>
    <?php
    /*
    ЗАДАНИЕ 3
    - Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
    */
    
    // Таблица с параметрами по умолчанию
    $count1 = getTable();
    
    // Таблица с одним параметром
    $count2 = getTable(10);
    
    // Таблица с двумя параметрами
    $count3 = getTable(8, 10);
    
    // Таблица с тремя параметрами (красный цвет)
    $count4 = getTable(5, 6, 'red');
    
    /*
    ЗАДАНИЕ 5
    - Используя статическую переменную $count выведите общее число вызовов функции getTable()
    */
    echo "<p>Таблица была отрисована $count4 раз(а)</p>";
    ?> 
</body>
</html>
