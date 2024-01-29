<?php

namespace app\controllers;

use app\models\Velocidadbotas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VelocidadbotasController implements the CRUD actions for Velocidadbotas model.
 */
class VelocidadbotasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Velocidadbotas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Velocidadbotas::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idbotas' => SORT_DESC,
                    'velmovimiento' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Velocidadbotas model.
     * @param int $idbotas Idbotas
     * @param int $velmovimiento Velmovimiento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idbotas, $velmovimiento)
    {
        return $this->render('view', [
            'model' => $this->findModel($idbotas, $velmovimiento),
        ]);
    }

    /**
     * Creates a new Velocidadbotas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Velocidadbotas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idbotas' => $model->idbotas, 'velmovimiento' => $model->velmovimiento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Velocidadbotas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idbotas Idbotas
     * @param int $velmovimiento Velmovimiento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idbotas, $velmovimiento)
    {
        $model = $this->findModel($idbotas, $velmovimiento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idbotas' => $model->idbotas, 'velmovimiento' => $model->velmovimiento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Velocidadbotas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idbotas Idbotas
     * @param int $velmovimiento Velmovimiento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idbotas, $velmovimiento)
    {
        $this->findModel($idbotas, $velmovimiento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Velocidadbotas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idbotas Idbotas
     * @param int $velmovimiento Velmovimiento
     * @return Velocidadbotas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idbotas, $velmovimiento)
    {
        if (($model = Velocidadbotas::findOne(['idbotas' => $idbotas, 'velmovimiento' => $velmovimiento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
