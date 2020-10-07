<?php
use yii\helpers\Html;
?>
<form id="FormUpdate" action="/currency/update?id=<?= $model->id; ?>" role="form">
    <div class="modal-header">
        <h4 class="modal-title"><?= Yii::t('app', 'Обновление pdf'); ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>"
            value="<?= Yii::$app->request->getCsrfToken(); ?>" />
        <!-- input states -->
        <div class="form-group">
            <label class="control-label" for="title"><?= Yii::t('app', 'Текст'); ?></label>
            <textarea name="Pdf[text]" class="form-control" rows="3" placeholder="<?= Yii::t('app', 'Текст'); ?>"><?= Html::encode($model->text); ?></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left"
            data-dismiss="modal"><?= Yii::t('app', 'Закрыть'); ?></button>
        <button type="button" class="btn btn-primary"
            id="submitUpdate"><?= Yii::t('app', 'Обновить'); ?></button>
    </div>
</form>