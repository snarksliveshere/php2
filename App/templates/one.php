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
<h1>Одна новость</h1>
    <?php if(!empty($article->author)) :?>
        <p>автор: <?=$article->author->name;?></p>
    <?php endif;?>
    <h2><a href="article.php?id=<?=$article->id?>"><?=$article->title?></a></h2>
    <p><?=$article->content?></p>
</body>
</html>
