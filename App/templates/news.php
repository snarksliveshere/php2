<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($news as $item) :?>
        <p>автор: <?=$item->author[0]->name;?></p>
        <h2><a href="article.php?id=<?=$item->id?>"><?=$item->title?></a></h2>
        <p><?=$item->content?></p>
    <?php endforeach;?>
</body>
</html>
