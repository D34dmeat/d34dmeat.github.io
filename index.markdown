---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: page

---
[posts](posts.md)
[about](/about/)


## welcome

{% for page in  site.pages %}
{% if page.short  %}

+ [{{ page.title }}]({{page.url }})
      {{ page.short }}

    
{% endif %}
{%endfor%}
