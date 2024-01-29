<?php

namespace app\controllers;

use app\models\Armas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArmasController implements the CRUD actions for Armas model.
 */
class ArmasController extends Controller
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
     * Lists all Armas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Armas::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idarma' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Armas model.
     * @param int $idarma Idarma
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idarma)
    {
        return $this->render('view', [
            'model' => $this->findModel($idarma),
        ]);
    }

    /**
     * Creates a new Armas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Armas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idarma' => $model->idarma]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Armas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idarma Idarma
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idarma)
    {
        $model = $this->findModel($idarma);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idarma' => $model->idarma]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Armas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idarma Idarma
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idarma)
    {
        $this->findModel($idarma)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Armas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idarma Idarma
     * @return Armas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idarma)
    {
        if (($model = Armas::findOne(['idarma' => $idarma])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
