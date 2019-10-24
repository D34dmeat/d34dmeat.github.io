---
title: posts
layout: page
---

{% for page in site.pages %}
{% if page.title and page.url != ""pages.md"%}
{{ page.title }}

{{ page.content }}
{%endif%}
{%endfor%}
