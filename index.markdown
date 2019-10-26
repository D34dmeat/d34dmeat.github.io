---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home

---
[posts](posts.md)
[about](/about/)


{% for cat in site.category %}
{{ cat }}
{% for page in site.category: cat %}
[{{ page.title }]({{ page.url}})
{%endfor%}
{%endfor%}
