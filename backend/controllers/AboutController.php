<?php

namespace backend\controllers;

use Yii;
use backend\models\About;
use backend\controllers\AboutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AboutController implements the CRUD actions for About model.
 */
class AboutController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all About models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AboutSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // $abouts = self::model->findAll();
        // print_r($dataProvider); die();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single About model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new About model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new About();
        if(Yii::$app->request->post()){
            $code = mt_rand(100000, 999999);
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if ($model->file && $model->validate()) {
                $model->file->saveAs('uploads/'.$code.$model->title .'_'.$model->title.'_'.$model->file->baseName.'.'. $model->file->extension);
            }
            $model->image = 'uploads/'.$code.$model->title .'_'.$model->title.'_'.$model->file->baseName.'.'. $model->file->extension;
            
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing About model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if(Yii::$app->request->post()){
            $model->file = UploadedFile::getInstance($model, 'file');
            
            if ($model->file && $model->validate()) {
                $model->file->saveAs('uploads/'.$model->title .'_'.$model->title.'_'.$model->file->baseName.'.'. $model->file->extension);
            }
            $model->image = 'uploads/'.$model->title .'_'.$model->title.'_'.$model->file->baseName.'.'. $model->file->extension;
            

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing About model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the About model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return About the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = About::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
