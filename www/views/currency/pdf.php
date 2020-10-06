<?php

use yii\helpers\Html;

$this->title = 'Национального Банка';
?>
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><?=Yii::t('app', 'Национального Банка Республики Казахстан');?></h3>
    <div class="card-tools"></div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th><?=Yii::t('app', '№');?></th>
                <th><?=Yii::t('app', 'Название');?></th>
                <th><?=Yii::t('app', 'Курс');?></th>
                <th><?=Yii::t('app', 'Дата публикауия');?></th>
                <th><?=Yii::t('app', 'Дата получение');?></th>
            </tr>
            </thead>
            <tbody>
             <?php if(!empty($model)):?>
               <?php $i=1; foreach($model as $item):?>
                <tr>
                    <td><?=$i++;?></td>
                    <td><?= Html::encode($item->name); ?></td>
                    <td><?= Html::encode($item->rate); ?>&nbsp;тг</td>
                    <td><?= Html::encode($item->date); ?></td>
                    <td><?= Html::encode($item->created_at); ?></td>
                </tr>
               <?php endforeach;?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" style="text-align: center; color: red;"><?= Yii::t('app', 'Пусто!!!'); ?></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<!-- /.card-body -->
</div>