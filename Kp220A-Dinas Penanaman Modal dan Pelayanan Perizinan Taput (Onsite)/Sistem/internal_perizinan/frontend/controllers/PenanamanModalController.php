<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PenanamanModal;
use frontend\models\PenanamanModalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;

/**
 * PenanamanModalController implements the CRUD actions for PenanamanModal model.
 */
class PenanamanModalController extends Controller
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
     * Lists all PenanamanModal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenanamanModalSearch();
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
     * Displays a single PenanamanModal model.
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
    $model = PenanamanModal::findOne($id);
        
    // This will need to be the path relative to the root of your app.
    $filePath = '/web/file-penanaman-modal/';
    // Might need to change '@app' for another alias
    $completePath = Yii::getAlias('@frontend'.$filePath.$model->file);

    return Yii::$app->response->sendFile($completePath, $filePath, ['inline'=>true]);

        
}

    /**
     * Creates a new PenanamanModal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PenanamanModal();
        if(Yii::$app->user->identity->role=='penanaman_modal'){
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_penanaman_modal]);
        }

        return $this->render('create', [
            'model' => $model,
        
        ]);
        }
        throw new NotFoundHttpException('Anda Tidak Dapat Melakukan Upload Dokumen.');
    }

    /**
     * Updates an existing PenanamanModal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_penanaman_modal]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenanamanModal model.
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
     * Finds the PenanamanModal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PenanamanModal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PenanamanModal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
