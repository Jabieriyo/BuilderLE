<?php

namespace app\controllers;

use app\models\Collares;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CollaresController implements the CRUD actions for Collares model.
 */
class CollaresController extends Controller
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
     * Lists all Collares models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Collares::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idcollar' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Collares model.
     * @param int $idcollar Idcollar
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idcollar)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcollar),
        ]);
    }

    /**
     * Creates a new Collares model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Collares();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idcollar' => $model->idcollar]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Collares model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idcollar Idcollar
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcollar)
    {
        $model = $this->findModel($idcollar);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcollar' => $model->idcollar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Collares model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idcollar Idcollar
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcollar)
    {
        $this->findModel($idcollar)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Collares model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idcollar Idcollar
     * @return Collares the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcollar)
    {
        if (($model = Collares::findOne(['idcollar' => $idcollar])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
