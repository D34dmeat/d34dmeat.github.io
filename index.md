---
title: home
layout: home
permalink: /home/
sidebar: /nav/
---

Welcome
{% for page in  site.pages%}
{% if page.short %}

{{ page.title }}-

{{ page.short }}


{% endif %}
{%endfor%}