<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bayramaligunaydin\listing\models\Marketler;
/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\Fiyatlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fiyatlar-form">
      
    <?php $form = ActiveForm::begin(); ?>
     
    <?= $form->field($model, 'marked_id')->textInput() ?>

    <?= $form->field($model, 'urun_id')->textInput() ?>

    <?= $form->field($model, 'urun_fiyat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
