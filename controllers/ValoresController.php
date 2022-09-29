<?php

namespace backend\controllers;

use Yii;
use app\models\Valores;
use app\models\ValoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Model;


/**
 * ValoresController implements the CRUD actions for Valores model.
 */
class ValoresController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Valores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ValoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Valores model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Valores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $count=6;

        //Send at least one model to the form
        $prts = [new Valores()];

        //Create an array of the products submitted
        for($i = 1; $i < $count; $i++) {
            $prts[] = new Valores();
        }

        //Load and validate the multiple models
        if (Model::loadMultiple($prts, Yii::$app->request->post()) && Model::validateMultiple($prts)) {

            foreach ($prts as $valores) {
                $valores->save(false);
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', ['prts' => $prts]);
        }
        /* 
        $count=count(Yii::$app->request->post('valores', []));
        $valores=[new valores()];
        for($i=1; $i < $count; $i++) {
        $valores[]=new valores();
        }*/
    }

    /**
     * Updates an existing Valores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idvalores]);
        } else {
            return $this->render('update', [
                'model' => $model,]);
        }
    }

    /**
     * Deletes an existing Valores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Valores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Valores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Valores::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
