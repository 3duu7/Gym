<?php

namespace app\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath="@bower";
	public $css       =[
		'font-awesome/css/font-awesome.css',
	];
}