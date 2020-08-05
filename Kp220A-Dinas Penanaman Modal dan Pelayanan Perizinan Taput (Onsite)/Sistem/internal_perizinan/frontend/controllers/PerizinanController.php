<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Perizinan;
use frontend\models\PerizinanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;
use frontend\models\Izin;
use yii\helpers\ArrayHelper;
/**
 * PerizinanController implements the CRUD actions for Perizinan model.
 */
class PerizinanController extends Controller
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
     * Lists all Perizinan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerizinanSearch();
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
     * Displays a single Perizinan model.
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
        $model = Perizinan::findOne($id);
            
        // This will need to be the path relative to the root of your app.
        $filePath = '/web/bidang-perizinan/';
        // Might need to change '@app' for another alias
        $completePath = Yii::getAlias('@frontend'.$filePath.$model->file);
    
        return Yii::$app->response->sendFile($completePath, $filePath, ['inline'=>true]);    
    }
    

    /**
     * Creates a new Perizinan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Perizinan();
        $izin = Izin::find()->all();
        $izin = ArrayHelper::map($izin,'id_izin','izin');
         if(Yii::$app->user->identity->role=='perizinan'){
            if ($model->load(Yii::$app->request->post())){
                if ($model->validate()){
                    $id_perizinan = $model->id_perizinan;
                    $names = UploadedFile::getInstances($model, 'file');
    
                }
                foreach ($names as $name) 
                {
                    
                    $path = Yii::getAlias('@frontend/web/bidang-perizinan').'/'.($name->baseName).'.'.$name->extension;
                    if ($name->saveAs($path)){
                        $file = $name->baseName . '.' . $name->extension;
                        $filePath = $path;
                        
                        Yii::$app->db->createCommand()->insert('perizinan', ['file'=>$file, 'filePath' => $filePath,'no_izin'=> $model->no_izin, 'nama_pemilik'=> $model->nama_pemilik, 'lokasi' => $model->lokasi])->execute();
                    }                
                }
               
              return $this->redirect(['index', 'id' => $model->id_perizinan]);
          }
  
          return $this->render('create', [
            'model' => $model,
        
        ]);
        }
        throw new NotFoundHttpException('Anda Tidak Dapat Melakukan Upload Dokumen.');
    }

    /**
     * Updates an existing Perizinan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_perizinan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Perizinan model.
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
     * Finds the Perizinan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Perizinan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perizinan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

     public function actionDownload($id) 
    { 
        $download = Perizinan::findOne($id); 
        $path=Yii::getAlias('@frontend') . '/web/bidang-perizinan/' . $download->file;

        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
    }

    public function actionViewFile($id){
        $file = Yii::getAlias('@frontend' . '/web/bidang-perizinan/' . $fileName);
        return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);
    }
  
}
