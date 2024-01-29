<?php

namespace app\controllers;

use app\models\Armaduras;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArmadurasController implements the CRUD actions for Armaduras model.
 */
class ArmadurasController extends Controller
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
     * Lists all Armaduras models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Armaduras::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idarmadura' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Armaduras model.
     * @param int $idarmadura Idarmadura
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idarmadura)
    {
        return $this->render('view', [
            'model' => $this->findModel($idarmadura),
        ]);
    }

    /**
     * Creates a new Armaduras model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Armaduras();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idarmadura' => $model->idarmadura]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Armaduras model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idarmadura Idarmadura
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idarmadura)
    {
        $model = $this->findModel($idarmadura);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idarmadura' => $model->idarmadura]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Armaduras model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idarmadura Idarmadura
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idarmadura)
    {
        $this->findModel($idarmadura)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Armaduras model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idarmadura Idarmadura
     * @return Armaduras the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idarmadura)
    {
        if (($model = Armaduras::findOne(['idarmadura' => $idarmadura])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
