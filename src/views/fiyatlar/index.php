<?php 

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel bayramaligunaydin\listing\models\FiyatlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fiyatlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fiyatlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Market İsmi',
                'attribute'=> 'market_id',
                'value' => function($model){
                    $fiyatlar=bayramaligunaydin\listing\models\Fiyatlar::find()->where(['market_id'=>$model->market_id])->one();
                    return $model->market->market_isim;
                }
              ],
              [
                  'label' => 'Urun İsmi',
                  'attribute'=> 'urun_id',
                  'value' => function($model){
                      $fiyatlar=bayramaligunaydin\listing\models\Fiyatlar::find()->where(['urun_id'=>$model->urun_id])->one();
                      return $model->urun->urun_isim;
                  }
                ],
            'urun_fiyat',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
