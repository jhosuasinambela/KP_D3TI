<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Sekretariat;
use frontend\models\SekretariatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;
use frontend\models\Surat;
use yii\helpers\ArrayHelper;

/**
 * SekretariatController implements the CRUD actions for Sekretariat model.
 */
class SekretariatController extends Controller
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
     * Lists all Sekretariat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SekretariatSearch();
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
     * Displays a single Sekretariat model.
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
    $model = Sekretariat::findOne($id);
        
    // This will need to be the path relative to the root of your app.
    $filePath = '/web/file-sekretariat/';
    // Might need to change '@app' for another alias
    $completePath = Yii::getAlias('@frontend'.$filePath.$model->file);

    return Yii::$app->response->sendFile($completePath, $filePath, ['inline'=>true]);    
}


    /**
     * Creates a new Sekretariat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sekretariat();
        $surat = Surat::find()->all();
        $surat = ArrayHelper::map($surat,'id_surat','surat');
         if(Yii::$app->user->identity->role=='sekretariat'){
            if ($model->load(Yii::$app->request->post())){
                if ($model->validate()){
                    $id_sekretariat = $model->id_sekretariat;
                    $names = UploadedFile::getInstances($model, 'file');
    
                }
                foreach ($names as $name) 
                {
                    
                    $path = Yii::getAlias('@frontend/web/file-sekretariat').'/'.($name->baseName).'.'.$name->extension;
                    if ($name->saveAs($path)){
                        $file = $name->baseName . '.' . $name->extension;
                        $filepath = $path;
                        
                        Yii::$app->db->createCommand()->insert('sekretariat', ['file'=>$file, 'filepath' => $filepath,'no_surat'=> $model->no_surat,'jenis_surat'=>$model->jenis_surat, 'pengirim'=> $model->pengirim, 'tanggal' => $model->tanggal, 'perihal' => $model->perihal])->execute();
                    }                
                }
               
              return $this->redirect(['index', 'id' => $model->id_sekretariat]);
          }
  
          return $this->render('create', [
            'model' => $model,
            'surat' => $surat,
        
        ]);
        }
        throw new NotFoundHttpException('Anda Tidak Dapat Melakukan Upload Dokumen.');
    }
    
    /**
     * Updates an existing Sekretariat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_sekretariat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sekretariat model.
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
     * Finds the Sekretariat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sekretariat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sekretariat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDownload($id) 
    { 
        $download = Sekretariat::findOne($id); 
        $path=Yii::getAlias('@frontend') . '/web/file-sekretariat/' . $download->file;

        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
    }

    public function actionViewFile($id){
        $file = Yii::getAlias('@frontend' . '/web/file-sekretariat/' . $fileName);
        return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);
    }
  


}
