---
title: posts
layout: page
---

{% for page in site.pages %}
{% if page.title and page.title != "posts" and page.title != "About"%}


---

[{{page.title}}]({{page.url}})  {{ page.created}}

{{ page.content }}


{% endif %}
{% endfor %}
