<?php
namespace andrewdanilov\fancybox;

use yii\web\AssetBundle;

class FancyboxAsset extends AssetBundle
{
	public $sourcePath = '@andrewdanilov/fancybox';
	public $css = [
		'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css',
	];
	public $js = [
		'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
