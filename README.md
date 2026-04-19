[!WARNING]
**⚠️ This project has been archived and is no longer maintained. ⚠️**

Github has shown it does not respect its users. Other have said it better than I can.

- https://www.theregister.com/2022/06/30/software_freedom_conservancy_quits_github/
- https://www.andrlik.org/dispatches/migrating-from-github-motivation/
- https://techresolve.blog/2025/12/27/looking-to-migrate-company-off-github-whats-the/
- https://lord.io/leaving-github/
- https://dev.to/alanwest/how-to-actually-migrate-from-github-to-codeberg-without-losing-your-mind-33bf>
> Development has moved to Codeberg:
> **➡️ https://codeberg.org/DavidJEddy/yii2-rss-reader**
>
> Please update your remotes:
> ```bash
> git remote set-url origin https://codeberg.org/DavidJEddy/yii2-rss-reader
> ```

---
Yii2 rss reader
===============
Rss reader widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tugmaks/yii2-rss-reader "*"
```

or add

```
"tugmaks/yii2-rss-reader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php echo \tugmaks\RssFeed\RssReader::widget([
'channel'=>'http://example.com/feed.xml',
 'pageSize' = 5,
 'itemView' = 'item', //To set own viewFile set 'itemView'=>'@frontend/views/site/_rss_item'. Use $model var to access item properties
 'wrapTag' = 'div',
 'wrapClass' = 'rss-wrap',
]);
 ?>
```