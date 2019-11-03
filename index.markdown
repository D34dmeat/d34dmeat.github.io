---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home

---
[posts](posts.md)
[about](/about/)


{% for cat in site.categories %}


{{site.categories}}
{% for page in site.pages | where categories = page%}
{{ cat.category }}
[{{ page.title }}]({{ page.url}})
{%endfor%}
{%endfor%}
