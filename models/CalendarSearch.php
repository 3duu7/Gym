<?php
namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Activity;


class CalendarSearch extends Calendar
{
    public function search($params)
    {
        $query = Activity::find()->where(['user_id'=>Yii::$app->user->getId()]);

        $dataProvider = new ActiveDataProvider([
             'query' => $query,
             'pagination' => ['pageSize' => 30],
             'sort'=> ['defaultOrder' => ['start'=>SORT_DESC]]
         ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->calories,
            'val' => $this->peak_heartrate,
        ]);

        return $dataProvider;
    }
}