<?php

namespace app\controllers;

use Yii;
use app\models\Pdf;
use yii\web\Response;

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

    public function actionItem()
    {
        $model = Pdf::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('item', ['model' => $model]);
    }

    public function actionPdf($id)
    {
        $model = Pdf::findOne($id);
        $html = $this->renderPartial('pdf', ['model' => $model]);
        $pdf = Yii::$app->pdf;
        $pdf->content = $html;
        return $pdf->render();
    }

    public function actionCreate()
    {
        $model = new Pdf();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->created_at = date('Y-m-d H:i:s');
            return ['success' => $model->save()];
        }
    }

    public function actionPast($id)
    {
        $model =  Pdf::findOne($id);
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', ['model' => $model]);
        }
    }

    public function actionUpdate($id)
    {
        $model =  Pdf::findOne($id);
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model->updated_at = date('Y-m-d H:i:s');
            if ($model->save()) {
                $update_up = Pdf::find()->orderBy(['id' => SORT_DESC])->all();
                $html = $this->renderPartial('jsUpdate', ['model' => $update_up], true);
                return ['success' => true, 'html' => $html];
            } else {
                return ['success' => false];
            }
        }
    }

}
