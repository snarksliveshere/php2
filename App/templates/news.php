{% extends "base.html" %}
{% block title %}{% endblock %}
{% block content %}
    {% for item in news %}
        {% if item.author.name not empty %}
            <p>автор: {{item.author.name}}</p>
        {% endif %}
        <h2>{{item.title}}</h2>
        <p>{{item.content}}</p>
    {% endfor %}
{% endblock %}

