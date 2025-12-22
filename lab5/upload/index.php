
<?php

/*
ЗАДАНИЕ
Добавьте в каталог upload файл index.php в котором:
Получите список файлов, находящихся в текущем каталоге
Для каждого изображения добавить на страницу элемент img
Стилизовать полученную страницу в виде галереи изображений
*/

$dir = '.';
$files = scandir($dir);
$allowed = ['jpg', 'jpeg'];
$images = [];

foreach ($files as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $allowed)) {
        $images[] = $file;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>JPEG Gallery</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f0f0f0;
            padding: 20px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }
        .gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="gallery">
        <?php foreach ($images as $image): ?>
            <img src="<?= htmlspecialchars($image) ?>" alt="Photo">
        <?php endforeach; ?>
    </div>

</body>
</html>