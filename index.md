---
title: home
layout: home
permalink: /home/
sidebar: /nav/
---

Welcome
{% for page in  site.pages%}
{% if page.short %}
## {{ page.title }} 
   {{ page.short }}   [read more..]({{ page.url }})

{% endif %}
{%endfor%}
{% for page in site.category %}
{{ page.category }}>-
[{{ page.title }]({{ page.url}})
{%endfor%}