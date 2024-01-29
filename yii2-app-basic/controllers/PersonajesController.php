<?php

namespace app\controllers;

use app\models\Personajes;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonajesController implements the CRUD actions for Personajes model.
 */
class PersonajesController extends Controller
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
     * Lists all Personajes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Personajes::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'idpersonaje' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Personajes model.
     * @param int $idpersonaje Idpersonaje
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idpersonaje)
    {
        return $this->render('view', [
            'model' => $this->findModel($idpersonaje),
        ]);
    }

    /**
     * Creates a new Personajes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Personajes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idpersonaje' => $model->idpersonaje]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Personajes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idpersonaje Idpersonaje
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idpersonaje)
    {
        $model = $this->findModel($idpersonaje);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpersonaje' => $model->idpersonaje]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Personajes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idpersonaje Idpersonaje
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idpersonaje)
    {
        $this->findModel($idpersonaje)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Personajes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idpersonaje Idpersonaje
     * @return Personajes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idpersonaje)
    {
        if (($model = Personajes::findOne(['idpersonaje' => $idpersonaje])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
