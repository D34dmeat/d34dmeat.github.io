---
title: posts
layout: page
---

{% for page in site.pages %}
{% if page.title and page.url != "posts.md"%}
{{ page.title }}

{{ page.content }}
{%endif%}
{%endfor%}
