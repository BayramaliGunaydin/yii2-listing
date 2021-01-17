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
<?php $this->title = 'Market Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Fiyatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;?>
<div class="fiyatlar-form">
     
    <?php $form = ActiveForm::begin(); ?>
    
    
    
    <?= $form->field($model, 'market_isim')->textInput() ?>
    
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
    
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

