<?php

namespace app\controllers;

use app\models\Botas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BotasController implements the CRUD actions for Botas model.
 */
class BotasController extends Controller
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
     * Lists all Botas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Botas::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idbotas' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Botas model.
     * @param int $idbotas Idbotas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idbotas)
    {
        return $this->render('view', [
            'model' => $this->findModel($idbotas),
        ]);
    }

    /**
     * Creates a new Botas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Botas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idbotas' => $model->idbotas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Botas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idbotas Idbotas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idbotas)
    {
        $model = $this->findModel($idbotas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idbotas' => $model->idbotas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Botas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idbotas Idbotas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idbotas)
    {
        $this->findModel($idbotas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Botas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idbotas Idbotas
     * @return Botas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idbotas)
    {
        if (($model = Botas::findOne(['idbotas' => $idbotas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
