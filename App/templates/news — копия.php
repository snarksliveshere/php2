{% extends "base.html" %}
{% block title %}{% endblock %}
{% block content %}
    <?php foreach ($news as $item) :?>
        <?php if(!empty($item->author)) :?>
        <p>автор: <?=$item->author->name;?></p>
        <?php endif;?>
        <h2><a href="<?=$_SERVER['SCRIPT_NAME'].'?action=One&id='.$item->id?>"><?=$item->title?></a></h2>
        <p><?=$item->content?></p>
    <?php endforeach;?>
{% endblock %}

{% for item in news %}
    <?php if(!empty($item->author)) :?>
        <p>автор: <?=$item->author->name;?></p>
    <?php endif;?>
    <h2><a href="<?=$_SERVER['SCRIPT_NAME'].'?action=One&id='.$item->id?>"><?=$item->title?></a></h2>
    <p><?=$item->content?></p>
{% endfor %}

{% if {{}} is empty %}
...
{% endif %}


<h1>Серия романов о Гарри Поттере</h1>

<div id="books">
    {% for item in news %}
    <div class="book">
        <strong>{{book.number}}</strong>. "<em>{{book.title}}"</em> - {{book.date}}
    </div>
    {% endfor %}
</div>
