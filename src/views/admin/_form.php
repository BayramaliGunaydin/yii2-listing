<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bayramaligunaydin\listing\models\Marketler;
use bayramaligunaydin\listing\models\Fiyatlar;
use bayramaligunaydin\listing\models\Urunler;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\Fiyatlar */
/* @var $form yii\widgets\ActiveForm */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>


<div class="fiyatlar-form">
     
    <?php $form = ActiveForm::begin(); ?>
    
    
    
    <?= $form->field($model, 'market_id')->textInput() ?>
    
    <?php $query = Marketler::find()->orderby('market_id');
    
    $dataProvider = new ActiveDataProvider([
        'query' => $query,
        'pagination' =>
     [
      'pageSize' => 3
     ],

    ]);?>
    <?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns' => [
        'Market_id'=>'market_id',
          'Market_isim'=>'market_isim',
    ],
]) ?>
    
    <?= $form->field($model, 'urun_id')->textInput() ?>

    <?php $query = Urunler::find()->orderby('urun_id');
    
    $dataProvider = new ActiveDataProvider([
        'query' => $query,
        'pagination' =>
     [
      'pageSize' => 3
     ],

    ]);?>
    <?= GridView::widget([
    'dataProvider'=>$dataProvider,
    'columns' => [
        'Urun_id'=>'urun_id',
          'Urun_isim'=>'urun_isim',
    ],
]) ?>





    <?= $form->field($model, 'urun_fiyat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
