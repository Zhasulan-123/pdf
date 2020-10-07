<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php if (!empty($model)) : ?>
<?php $i = 1; foreach ($model as $item) : ?>
<tr>
    <td><?=$i++;?></td>
    <td><?= Html::encode($item->language); ?></td>
    <td><?= Html::encode($item->created_at); ?></td>
    <td><?= Html::encode($item->updated_at); ?></td>
    <td>
        <a class="click_update" href="<?= Url::to(['/currency/update', 'id' => $item->id]) ?>" data-id="<?= $item->id; ?>"><i class="fas fa-pencil-alt"></i></a>
    </td>
    <td>
    <a href="<?= Url::to(['/currency/pdf', 'id' => $item->id]); ?>"><i class="far fa-file-alt"></i></a>
    </td>
</tr>
<?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="6" style="text-align: center; color: red;"><?= Yii::t('app', 'Пусто!!!'); ?></td>
    </tr>
<?php endif; ?>