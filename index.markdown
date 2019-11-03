---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home

---
[posts](posts.md)
[about](/about/)


{% for page in site.categories %}
[{{ page.title }}]({{ page.url}})
{%endfor%}
{{site.categories}}
{% for cat in site.pages | where category %}
{{ cat.category }}
{%endfor%}
