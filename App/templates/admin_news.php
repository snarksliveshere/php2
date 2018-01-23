{% extends "base.html" %}
{% block title %}{% endblock %}
{% block content %}
<a href="<?=$_SERVER['SCRIPT_NAME'].'?action=Create'?>">Создать</a>
<?php foreach ($news as $item) :?>
    <?php if(!empty($item->author)) :?>
        <p>автор: <?=$item->author->name;?></p>
    <?php endif;?>
    <h2><a href="<?=$_SERVER['SCRIPT_NAME'].'?action=One&id='.$item->id?>"><?=$item->title?></a></h2>
    <p><?=$item->content?></p>
    <a href="<?=$_SERVER['SCRIPT_NAME'].'?action=One&id='.$item->id?>">Редактировать</a>
    <a href="<?=$_SERVER['SCRIPT_NAME'].'?action=Delete&id='.$item->id?>">Удалить</a>
<?php endforeach;?>
{% endblock %}
