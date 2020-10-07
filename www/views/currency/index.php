<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'PDF файл';
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
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?=Html::encode($this->title);?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                 
              <div class="page"> 
                <div class="controls"> 
                  <select id="langs"> </select> 
                </div> 
                <div class="controls text-center"> 
                    <a href="#" class="btn btn-primary click_value_form"> 
                      <?=Yii::t('app', 'Добавить');?>
                    </a> 
                </div> 
                <div class="result"> 
                  <div class="result__preview text-center"> 
                    <img id="preview" width="400" src=""> 
                  <div> 
                <label for="file" class="btn btn-secondary"> 
                    <?=Yii::t('app', 'Выберите файл');?>
                   <input type="file" id="file"> 
                </label> <br> 
                <small><?=Yii::t('app', 'или перетащите на страницу');?></small> 
                </div> 
                </div> 
                <div class="result__log"> 

                  <div id="log"></div> 
                  <div class="text-center"> 
                    <button type="button" id="start" class="btn btn-primary"> 
                      <?=Yii::t('app', 'Начать обработку');?>
                    </button> 
                  </div> 

                </div> 
                </div> 
              </div> 

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>

  <?php $this->registerJsFile('@web/js/sctipttes.js', ['depends' => 'app\assets\TesseractAsset']); ?>
