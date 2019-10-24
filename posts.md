---
title: posts
layout: page
---

{% for page in site.pages %}
{% if page.title and ppage.title!= "posts"%}
{{ page.title }}

{{ page.content }}
{%endif%}
{%endfor%}
