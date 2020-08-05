<?php

namespace frontend\controllers;

use Yii;
use frontend\models\BidangPengendalian;
use frontend\models\BidangPengendalianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;

/**
 * PengendalianController implements the CRUD actions for Pengendalian model.
 */
class BidangPengendalianController extends Controller
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
     * Lists all Pengendalian models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BidangPengendalianSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if (Yii::$app->user->isGuest) {
            $this->redirect(Yii::$app->urlManager->createUrl(['site/login']));
        }else{
          return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);  
        }
    }
    /**
     * Displays a single Pengendalian model.
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

    public function actionPdf($id) {
        $model = BidangPengendalian::findOne($id);
            
        // This will need to be the path relative to the root of your app.
        $filePath = '/web/file-pengendalian/';
        // Might need to change '@app' for another alias
        $completePath = Yii::getAlias('@frontend'.$filePath.$model->file);
    
        return Yii::$app->response->sendFile($completePath, $filePath, ['inline'=>true]);    
    }

    /**
     * Creates a new Pengendalian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BidangPengendalian();
        if(Yii::$app->user->identity->role=='pengendalian'){
        if ($model->load(Yii::$app->request->post())){
            if ($model->validate()){
                $id_pengendalian = $model->id_pengendalian;
                $names = UploadedFile::getInstances($model, 'file');

            }
            foreach ($names as $name) 
            {
                
                $path = Yii::getAlias('@frontend/web/file-pengendalian').'/'.($name->baseName).'.'.$name->extension;
                if ($name->saveAs($path)){
                    $file = $name->baseName . '.' . $name->extension;
                    $filepath = $path;
                    
                    Yii::$app->db->createCommand()->insert('pengendalian', ['file'=>$file, 'filepath' => $filepath,'nama'=> $model->nama, 'lokasi'=> $model->lokasi, 'tahun' => $model->tahun])->execute();
                }                
            }
           
          return $this->redirect(['index', 'id' => $model->id_pengendalian]);
      }
      return $this->render('create', [
        'model' => $model,
    
    ]);
    }
    throw new NotFoundHttpException('Anda Tidak Dapat Melakukan Upload Dokumen.');
}

    /**
     * Updates an existing Pengendalian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pengendalian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pengendalian model.
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
     * Finds the Pengendalian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pengendalian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BidangPengendalian::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    
    public function actionDownload($id) 
    { 
        $download = BidangPengendalian::findOne($id); 
        $path=Yii::getAlias('@frontend') . '/web/file-pengendalian/' . $download->file;

        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
    }

    public function actionViewFile($id){
        $file = Yii::getAlias('@frontend' . '/web/file-pengendalian/' . $fileName);
        return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);
    }
}