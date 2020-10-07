<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Списки текст';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=Html::encode($this->title);?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><?=Html::encode($this->title);?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
             
          <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?=Html::encode($this->title);?></h3>
                <div class="card-tools"></div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap past_up">
                  <thead>
                    <tr>
                      <th><?=Yii::t('app', '№');?></th>
                      <th><?=Yii::t('app', 'Язык');?></th>
                      <th><?=Yii::t('app', 'Дата создание');?></th>
                      <th><?=Yii::t('app', 'Дата обновление');?></th>
                      <th></th>
                      <th><?=Yii::t('app', 'pdf');?></th>
                    </tr>
                  </thead>
                  <tbody>

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
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

  <?php $this->registerJsFile('@web/js/update.js', ['depends' => 'app\assets\AppAsset']); ?>
