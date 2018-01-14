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

?>

<h1>Одна новость</h1>
<form action="<?=$_SERVER['SCRIPT_NAME'].'?action=Update&id='.$article->id?>" method="post">
    <?php if(!empty($article->author)) :?>
        <label>автор: <?=$article->author->name;?></label>
    <?php endif;?>
    <label for="">Заголовок</label>
    <input type="text" name="title" value="<?=$article->title?>">
    <label for="">Контент</label>
    <textarea name="content"><?=$article->content?></textarea>
    <input type="submit" value="Изменить">
</form>

</body>
</html>