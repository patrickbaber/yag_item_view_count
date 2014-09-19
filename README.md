YAG Item View Count
===================
Extension-Key: yag_item_view_count

Overview
-------------------

Adds a new attribute called "view count" to the item model of YAG for counting the views.

Installation
-------------------

Install this extension and add the static template "YAG Item View Count (yag_item_view_count)" to your page template. Now you have the possibility to get the view count of an item/image in your template files. The specifict notation depends on the YAG template. The attribute is called '.viewCount'.

Usage
-------------------

Example 1 (Templates/Item/ShowSingle.html):
```typoscript
{item.viewCount}
```

Example 2 (Partials/Image/ImageThumb.html):
```typoscript
{image.viewCount}
```
