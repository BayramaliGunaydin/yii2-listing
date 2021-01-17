<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model bayramaligunaydin\listing\models\Marketler */

$this->title = "Yeni Urun Eklendi";
$this->params['breadcrumbs'][] = ['label' => 'Fiyatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fiyatlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'urun_id',
            'urun_isim'
        ],
    ]) ?>

<p>
        <?= Html::a('Geri Dön', ['index'], ['class' => 'btn btn-success']) ?>
        
    </p>


</div>