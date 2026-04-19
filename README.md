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
Yii2 RSS Reader
===============
RSS reader widget for Yii2.

Badges
-----

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ee1d3eaa-531a-45c6-9ba9-d6b6dda61d6e/mini.png)](https://insight.sensiolabs.com/projects/ee1d3eaa-531a-45c6-9ba9-d6b6dda61d6e)
[![Latest Stable Version](https://poser.pugx.org/davidjeddy/yii2-rss-reader/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/yii2-rss-reader/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![License](https://poser.pugx.org/davidjeddy/yii2-rss-reader/license?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Total Downloads](https://poser.pugx.org/davidjeddy/yii2-rss-reader/downloads?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Monthly Downloads](https://poser.pugx.org/davidjeddy/yii2-rss-reader/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/yii2-rss-reader/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/yii2-rss-reader)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

    php composer.phar require --prefer-dist davidjeddy/yii2-rss-reader "*"

or add

    "davidjeddy/yii2-rss-reader": "*"

to the require section of your `composer.json` file.

Usage
-----

Once the widget is installed, add it to a view script:

    echo \davidjeddy\RssFeed\RssReader::widget([
        'channel'   => '{source_url}/feed.xml',
        'itemView'  => 'item',
        'pageSize'  => 5,
        'wrapClass' => 'rss-wrap',
        'wrapTag'   => 'div',
    ]);