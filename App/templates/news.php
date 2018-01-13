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
    <?php foreach ($news as $item) :?>
        <?php if(!empty($item->author)) :?>
        <p>автор: <?=$item->author->name;?></p>
        <?php endif;?>
        <h2><a href="article.php?id=<?=$item->id?>"><?=$item->title?></a></h2>
        <p><?=$item->content?></p>
    <?php endforeach;?>
</body>
</html>
