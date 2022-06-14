<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\UploadForm;
use yii\web\UploadedFile;

class RutinaController extends Controller
{
  public function actionBiceps()
    {
        return $this->render('biceps');
    }

    public function actionEspalda()
    {
        return $this->render('espalda');
    }

    public function actionHombros()
    {
        return $this->render('hombros');
    }

    public function actionTriceps()
    {
        return $this->render('triceps');
    }

    public function actionPecho()
    {
        return $this->render('pecho');
    }


    public function actionCore()
    {
        return $this->render('core');
    }

    public function actionPiernas()
    {
        return $this->render('piernas');
    }

    public function actionAbdominal()
    {
        return $this->render('abdominal');
    }
}