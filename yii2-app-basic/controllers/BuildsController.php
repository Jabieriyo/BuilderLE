<?php

namespace app\controllers;

use app\models\Builds;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BuildsController implements the CRUD actions for Builds model.
 */
class BuildsController extends Controller
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
     * Lists all Builds models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Builds::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'nombre' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Builds model.
     * @param string $nombre Nombre
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nombre)
    {
        return $this->render('view', [
            'model' => $this->findModel($nombre),
        ]);
    }

    /**
     * Creates a new Builds model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Builds();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nombre' => $model->nombre]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Builds model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nombre Nombre
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nombre)
    {
        $model = $this->findModel($nombre);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nombre' => $model->nombre]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Builds model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nombre Nombre
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nombre)
    {
        $this->findModel($nombre)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Builds model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nombre Nombre
     * @return Builds the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nombre)
    {
        if (($model = Builds::findOne(['nombre' => $nombre])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
