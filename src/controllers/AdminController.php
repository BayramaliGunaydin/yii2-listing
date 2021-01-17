<?php

namespace bayramaligunaydin\listing\controllers;

use Yii;
use bayramaligunaydin\listing\models\Fiyatlar;
use bayramaligunaydin\listing\models\Marketler;
use bayramaligunaydin\listing\models\Urunler;
use bayramaligunaydin\listing\models\FiyatlarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\StringHelper;

/**
 * FiyatlarController implements the CRUD actions for Fiyatlar model.
 */
class AdminController extends \yii\web\Controller
{
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Fiyatlar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FiyatlarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fiyatlar model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            
        ]);
    }

    /**
     * Creates a new Fiyatlar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fiyatlar();
        

       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->fiyat_ıd]);
        }*/

        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->fiyat_ıd]);}
        } catch (\Exception $e) {
            $model->addError(null, $e->getMessage());
            
            echo '<script type="text/javascript">alert("' . "Markete ait ürünün fiyatı listede bulunmakta!" . '")</script>';
            return $this->render('create', ['model' => $model]);
        }

        return $this->render('create', [
            'model' => $model,
            
        ]);
    }

    public function actionMarketcreate()
    {
        $model = new Marketler();
        

      /*  if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewmarket', 'id' => $model->market_id]);
        }*/

        try {
            if($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewmarket', 'id' => $model->market_id]);}
        } catch (\Exception $e) {
            $model->addError(null, $e->getMessage());
            
            echo '<script type="text/javascript">alert("' . "Market listede bulunmakta!" . '")</script>';
            return $this->render('Marketcreate', ['model' => $model]);
        }

        return $this->render('marketcreate', [
            'model' => $model,
            
        ]);
    }
    public function actionUruncreate()
    {
        $model = new Urunler();
        

        /*if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewurun', 'id' => $model->urun_id]);
        }*/

        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewurun', 'id' => $model->urun_id]);
            }
        } catch (\Exception $e) {
            $model->addError(null, $e->getMessage());
            
            echo '<script type="text/javascript">alert("' . "Urun listede bulunmakta!" . '")</script>';
            return $this->render('uruncreate', ['model' => $model]);
        }

        return $this->render('uruncreate', [
            'model' => $model,
            
        ]);
    }
    public function actionViewmarket($id)
    {
        return $this->render('viewmarket', [
            'model' => $this->findModelmarket($id),
            
        ]);
    }
    public function actionViewurun($id)
    {
        return $this->render('viewurun', [
            'model' => $this->findModelurun($id),
            
        ]);
    }

    /**
     * Updates an existing Fiyatlar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->fiyat_ıd]);
        }*/
        try {
             if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->fiyat_ıd]);}
        } catch (\Exception $e) {
            $model->addError(null, $e->getMessage());
            
            echo '<script type="text/javascript">alert("' . "Markete ait ürünün fiyatı listede bulunmakta!" . '")</script>';
            return $this->render('create', ['model' => $model]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Fiyatlar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fiyatlar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fiyatlar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fiyatlar::findOne($id)) !== null) {
            return $model;
        }
        

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected function findModelmarket($id)
    {
        if (($model = Marketler::findOne($id)) !== null) {
            return $model;
        }
        

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected function findModelurun($id)
    {
        if (($model = Urunler::findOne($id)) !== null) {
            return $model;
        }
        

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
