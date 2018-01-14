<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<?php
//var_dump($GLOBALS);


?>

<h1>Одна новость</h1>
<form action="<?=$_SERVER['SCRIPT_NAME'].'?action=Create'?>" method="post">
    <label>автор:</label>
    <select name="author_id" id="">
        <?php foreach ($authors as $item) :?>
            <option value="<?=$item->id?>"><?=$item->id?></option>
        <?php endforeach; ?>
    </select>
    <label for="">Заголовок</label>
    <input type="text" name="title" value="">
    <label for="">Контент</label>
    <textarea name="content"></textarea>
    <input type="submit" value="Создать">
</form>

</body>
</html>