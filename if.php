<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $name и присвойте ей значение содержащее Ваше имя, например 'Иван' (обязательно в одинарных кавычках!).
- Создайте переменную $age и присвойте ей значение содержащее Ваш возраст, например 20.
- Добавьте переменную $isStudent со значением true или false.
*/


$name = 'Дарья';
$age = 20;
$isStudent = true;


$type_name = gettype($name);
$type_age = gettype($age);
$type_student = gettype($isStudent);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Условные операторы</title>
</head>
<body>
    <h1>Работа с условными операторами</h1>
    
    <?php
    /*
    ЗАДАНИЕ 2
    - Выведите с помощью echo фразу "Меня зовут: $name", например: 'Меня зовут: Иван'.
    - Выведите фразу "Мне $age лет", например: 'Мне 20 лет'.
    - Проверьте возраст и выведите соответствующее сообщение:
        * если меньше 18 - "Вы несовершеннолетний"
        * от 18 до 25 - "Вы молодой человек"
        * больше 25 - "Вы взрослый человек"
    - Проверьте статус студента и выведите:
        * если true - "Вы являетесь студентом"
        * если false - "Вы не являетесь студентом"
    - Выведите информацию о типе всех переменных.
    - Удалите все созданные переменные.
    */
    

    echo "Меня зовут $name<br>";
    echo "Мне $age лет<br>";
    

    if ($age < 18) {
        echo "Вы несовершеннолетний<br>";
    } elseif ($age >= 18 && $age <= 25) {
        echo "Вы молодой человек<br>";
    } else {
        echo "Вы взрослый человек<br>";
    }
    

    if ($isStudent) {
        echo "Вы являетесь студентом<br>";
    } else {
        echo "Вы не являетесь студентом<br>";
    }
    

    echo "Тип переменной name: $type_name<br>";
    echo "Тип переменной age: $type_age<br>";
    echo "Тип переменной isStudent: $type_student<br>";
    

    unset($name, $age, $isStudent, $type_name, $type_age, $type_student);
    ?>
</body>
</html>
