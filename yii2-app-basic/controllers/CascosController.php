<?php

namespace app\controllers;

use app\models\Cascos;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CascosController implements the CRUD actions for Cascos model.
 */
class CascosController extends Controller
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
     * Lists all Cascos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Cascos::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idcasco' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cascos model.
     * @param int $idcasco Idcasco
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idcasco)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcasco),
        ]);
    }

    /**
     * Creates a new Cascos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Cascos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idcasco' => $model->idcasco]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cascos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idcasco Idcasco
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcasco)
    {
        $model = $this->findModel($idcasco);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcasco' => $model->idcasco]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cascos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idcasco Idcasco
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcasco)
    {
        $this->findModel($idcasco)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cascos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idcasco Idcasco
     * @return Cascos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcasco)
    {
        if (($model = Cascos::findOne(['idcasco' => $idcasco])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
