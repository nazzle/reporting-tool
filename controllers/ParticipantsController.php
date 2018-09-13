<?php

namespace app\controllers;

use Yii;
use app\models\Participants;
use app\models\ParticipantsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Courses;

/**
 * ParticipantsController implements the CRUD actions for Participants model.
 */
class ParticipantsController extends Controller
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
     * Lists all Participants models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ParticipantsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Participants model.
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
     * Creates a new Participants model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $courses = Courses::findOne($id);
        $model = new Participants();

        if ($model->load(Yii::$app->request->post()) && $courses->load(Yii::$app->request->post())) {
            
             foreach ($model->personnel_id as $value) 
                {
//                     $cc_users = (new \yii\db\Query())
//                    ->select('user_id')
//                    ->distinct()
//                    ->from('positions')
//                    ->where(['id' => $value])
//                    ->one();
//                    foreach ($cc_users as $cc_user){
                  $model->save([$model->course_id = $courses->id, $model->personnel_id = $value]);    

                  //  }
                }
            
          
            return $this->redirect(['courses/view', 'id' => $id]);
        }

        return $this->renderAjax('create', [
            'model' => $model,
            'courses' => $courses,
           // 'model' => (empty($model)) ? [new Participants] : $model
        ]);
    }

    /**
     * Updates an existing Participants model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Participants model.
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
     * Finds the Participants model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Participants the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Participants::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
