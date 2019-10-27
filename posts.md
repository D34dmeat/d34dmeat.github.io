---
title: posts
layout: page
permalink: /posts/
---
## posts

{% for page in site.pages %}
{% if page.title and page.title != "posts" and page.title != "about"%}


---

[{{page.title}}]({{page.url}})  {{ page.created}}

{{ page.content | truncate: 120}}


{% endif %}
{% endfor %}
