<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ПРИВЕТСТВ</h1>
    <p>Файл который хочет быть дружелюбным</p>
    <form method="POST">
        <input type="text" name="name" placeholder="ВВЕдите ваше имя">
        <input type="submit" value="ОТправить">
    </form>
    <?php
 
        if (isset($_POST['name'])) {
            print('<h2>'.'Привет, ' . $_POST['name'] . '</h2>');
        }
    ?>
</body>
</html>