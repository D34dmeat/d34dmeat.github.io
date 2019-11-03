---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: default

---
[posts](posts.md)
[about](/about/)


{% for cat in site.pages | where categories %}



{% for page in site.pages | where categories = cat.categories%}

[{{ page.title }}]({{ page.url}})
{%endfor%}
{%endfor%}
