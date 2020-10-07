<?php

use yii\helpers\Html;

$this->title = 'Pdf file';
?>
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><?=Yii::t('app', 'Текст на изображение');?></h3>
    <div class="card-tools"></div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th><?=Yii::t('app', 'Язык');?></th>
                <th><?=Yii::t('app', 'Текст');?></th>
            </tr>
            </thead>
            <tbody>
             <?php if(!empty($model)):?>
                <tr>
                    <td><?= Html::encode($model->language); ?></td>
                    <td><?= Html::encode($model->text); ?>&nbsp;тг</td>
                </tr>
                <?php else : ?>
                    <tr>
                        <td colspan="2" style="text-align: center; color: red;"><?= Yii::t('app', 'Пусто!!!'); ?></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<!-- /.card-body -->
</div>