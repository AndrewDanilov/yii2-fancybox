Fancybox Asset
===================
Asset for adding fancybox functionality to your pages

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require andrewdanilov/yii2-fancybox "dev-master"
```

or add

```
"andrewdanilov/yii2-fancybox": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Register asset bundle in View

```php
<?php
/* @var $this \yii\web\View */
\andrewdanilov\fancybox\FancyboxAsset::register($this);
```