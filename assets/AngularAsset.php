<?php
namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class AngularAsset extends AssetBundle
{
	public $sourcePath="@bower";
	
	public $js        =[
		'angular/angular.js',
		'angular-route/angular-route.js',
	];
	public $jsOptions =[
		'position'=>View::POS_HEAD,
	];

	public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
        //'app\assets\AngularAsset',
    ];
}

