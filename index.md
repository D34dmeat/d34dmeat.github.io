---
title: home
layout: home
permalink: /home/
sidebar: /nav/
---

Welcome
{% for page in  site.pages%}
{% if page.dir = "/posts/" %}

{{ page.content }}

{% endif %}
{%endfor%}