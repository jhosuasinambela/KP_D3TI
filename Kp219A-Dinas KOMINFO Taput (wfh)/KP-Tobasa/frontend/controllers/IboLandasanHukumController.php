<?php

namespace frontend\controllers;

use Yii;
use frontend\models\IboLandasanHukum;
use frontend\models\IboLandasanHukumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * IboLandasanHukumController implements the CRUD actions for IboLandasanHukum model.
 */
class IboLandasanHukumController extends Controller
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
     * Lists all IboLandasanHukum models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IboLandasanHukumSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IboLandasanHukum model.
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
     * Creates a new IboLandasanHukum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IboLandasanHukum();
 
           if ($model->load(Yii::$app->request->post())){
          $model->id_ibo_landasan_hukum = Yii::$app->user->id;
          $model->upload_file = "Initial";
          $file = UploadedFile::getInstance($model, 'upload_file');
          $fileName = $file->baseName . '.' . $file->getExtension();
          $file->saveAs(Yii::getAlias('@frontend') . '/web/File Izin/' . $fileName);
          $model->upload_file = $fileName;
          $model->save(false);

          return $this->redirect(['view', 'id' => $model->id_ibo_landasan_hukum]);
      }else{
        return $this->render('create', [
            'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing IboLandasanHukum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_ibo_landasan_hukum]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IboLandasanHukum model.
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

    public function actionDownload($id) 
    { 
        $download = IboLandasanHukum::findOne($id); 
        $path=Yii::getAlias('@frontend') . '/web/File Izin/' . $download->upload_file;

        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        }
    }
    /**
     * Finds the IboLandasanHukum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return IboLandasanHukum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IboLandasanHukum::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
