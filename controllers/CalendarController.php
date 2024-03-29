<?php

namespace app\controllers;

use app\models\Calendar;
use app\models\CalendarSearch;
use yii\web\Controller;


use Yii;

class CalendarController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new CalendarSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
                'dataProvider' => $dataProvider
            ]);
    }
}