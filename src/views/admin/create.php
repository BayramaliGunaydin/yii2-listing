<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\Fiyatlar */

$this->title = 'Fiyat Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Fiyatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fiyatlar-create">

    <h1><?= Html::encode($this->title) ?></h1>
     
    <?= $this->render('_form', [
        'model' => $model,
        
    ]) ?>

</div>
