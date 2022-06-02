<?php
namespace app\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
    
    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'index' => [
                'pagination' => [
                    'pageSize' => 10,
                ],
                'sort' => [
                    'defaultOrder' => [
                        'created_at' => SORT_DESC,
                    ],
                ],
            ],
        ]);
    }
}