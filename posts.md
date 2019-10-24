---
title: posts
layout: page
---

{% for page in site.pages %}
{% if page.title %}
{{ page.content }}
{%endif%}
{%endfor%}
