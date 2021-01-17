<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\FiyatlarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fiyatlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fiyat_ıd') ?>

    <?= $form->field($model, 'market_id') ?>

    <?= $form->field($model, 'urun_id') ?>

    <?= $form->field($model, 'urun_fiyat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
