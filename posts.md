---
title: posts
layout: page
---

{% for page in site.pages %}
{% if page.title and page.title != "posts"%}


---
{{ page.created}}

{{ page.content }}


{% endif %}
{% endfor %}