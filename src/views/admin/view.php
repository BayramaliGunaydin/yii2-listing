<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\Fiyatlar */

$this->title = "Yeni Fiyat Eklendi";
$this->params['breadcrumbs'][] = ['label' => 'Fiyatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fiyatlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fiyat_ıd',
            'market_id',
            'urun_id',
            'urun_fiyat',
        ],
    ]) ?>

</div>
