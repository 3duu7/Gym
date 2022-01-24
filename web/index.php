<?php

// define la constante YII_ENV_DEV como verdadera
//De esta manera, tu aplicación habrá habilitado Gii, y puedes acceder al módulo a través de la siguiente URL:
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// registrar el cargador automático de Composer
require __DIR__ . '/../vendor/autoload.php';

// incluir el fichero de clase Yii
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// cargar la configuración de la aplicación
$config = require __DIR__ . '/../config/web.php';

// crear, configurar y ejecutar la aplicación
(new yii\web\Application($config))->run();
