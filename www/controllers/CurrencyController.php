<?php

namespace app\controllers;

use Yii;
use app\models\Currency;


class CurrencyController extends AppController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPdf()
    {
        $model = Currency::find()->orderBy(['id' => SORT_DESC])->all();
        $html = $this->renderPartial('pdf', ['model' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $html;
        return $pdf->render();
    }

}
