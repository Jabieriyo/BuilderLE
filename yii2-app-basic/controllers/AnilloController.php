<?php

namespace app\controllers;

use app\models\Anillos;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnilloController implements the CRUD actions for Anillos model.
 */
class AnilloController extends Controller
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
     * Lists all Anillos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Anillos::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idanillo' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Anillos model.
     * @param int $idanillo Idanillo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idanillo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idanillo),
        ]);
    }

    /**
     * Creates a new Anillos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Anillos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idanillo' => $model->idanillo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Anillos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idanillo Idanillo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idanillo)
    {
        $model = $this->findModel($idanillo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idanillo' => $model->idanillo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Anillos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idanillo Idanillo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idanillo)
    {
        $this->findModel($idanillo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Anillos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idanillo Idanillo
     * @return Anillos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idanillo)
    {
        if (($model = Anillos::findOne(['idanillo' => $idanillo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
