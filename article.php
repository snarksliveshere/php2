<?php
    require __DIR__.'/autoload.php';
    if(!empty($_GET['id']) && (int)$_GET['id'] !=0)
    {
        // убираем возможность инъекций
        $id = (int)$_GET['id'];
    }
    else
    {
        $id = 1;
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
</head>
<body>
<?php
    $news = \App\Models\News::findById($id);
    if($news)
    {
        include __DIR__ . '/App/Views/news.php';
    }
?>
<p><a href="/index.php">назад</a></p>
</body>
</html>