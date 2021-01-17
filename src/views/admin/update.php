<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\Fiyatlar */

$this->title = 'Update Fiyatlar: ' . $model->fiyat_ıd;
$this->params['breadcrumbs'][] = ['label' => 'Fiyatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fiyat_ıd, 'url' => ['view', 'id' => $model->fiyat_ıd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fiyatlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
