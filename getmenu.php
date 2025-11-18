<?php
declare(strict_types=1);

/*
ЗАДАНИЕ 1
- Опишите функцию getMenu()
- Задайте для функции первый аргумент $menu, в него будет передаваться массив, содержащий структуру меню
- Задайте для функции второй аргумент $vertical со значением по умолчанию равным true. Данный параметр указывает, каким образом будет отрисовано меню - вертикально или горизонтально
- Добавьте в объявлние функции описание типов аргументов
*/

/**
 * Функция для отрисовки навигационного меню
 * @param array $menu Массив с элементами меню
 * @param bool $vertical Флаг вертикального/горизонтального отображения (true - вертикальное)
 * @return void
 */
function getMenu(array $menu, bool $vertical = true): void {
    $class = $vertical ? 'menu vertical' : 'menu horizontal';
    
    echo '<ul class="' . $class . '">';
    foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo '</ul>';
}

/*
ЗАДАНИЕ 2
- Откройте файл menu.php
- Скопируйте код, который создает массив $leftMenu и вставьте скопированный код в данный документ
*/
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu {
            list-style-type: none;
            margin: 0;	
            padding: 0;
        }

        .vertical li {
            margin: 5px 0;
        }
        
        .horizontal li {
            display: inline;
            padding: 5px 10px;
            margin-right: 10px;
            border-right: 1px solid #ccc;
        }
        
        .horizontal li:last-child {
            border-right: none;
        }
        
        .menu a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            display: inline-block;
        }
        
        .menu a:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
    <?php
    /*
    ЗАДАНИЕ 3
    - Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
    */
    echo "<h2>Вертикальное меню:</h2>";
    getMenu($leftMenu);
    
    /*
    ЗАДАНИЕ 4
    - Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным false
    */
    echo "<h2>Горизонтальное меню:</h2>";
    getMenu($leftMenu, false);
    ?> 
</body>
</html>
