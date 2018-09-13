<?php

namespace app\controllers;

use Yii;
use app\models\Courses;
use app\models\Participants;
use app\models\Personnel;
use app\models\PersonnelSearch;
use app\models\CoursesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Budget;
use yii\data\ActiveDataProvider;

/**
 * CoursesController implements the CRUD actions for Courses model.
 */
class CoursesController extends Controller
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
     * 
     * This action is to find all the ids for a selected course
     * 
     */
    public function actionCourses($id)
    {
    
        $countCourses = Courses::find()
                ->where(['id'=>$id])
                ->count();
        
        $names = Courses::find()
                ->where(['course_name'=> $id])
                ->all();
        
        if ($countCourses > 0)
        {
            foreach($names as $name) {
                echo "<option value='".$name->id."'>".$name->course_name."</option>";
            } 
        }else {
                echo "<option>-</option>";
            
            }
        
    }
    
    
    /**
     * Lists all Courses models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CoursesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Courses model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $searchModel = new PersonnelSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $participants = Participants::find()->select('personnel_id')->where(['course_id'=>$id]);
        $dataProvider = new ActiveDataProvider([
        'query' => Personnel::find()->Where(['in','id',$participants])]);
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Courses model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Courses();
        $budget = new Budget();

        if ($model->load(Yii::$app->request->post()) && $budget->load(Yii::$app->request->post())) 
            {

            $budget->save($budget->balance = $budget->allocated_budget - $budget->budget_spent);
            $model->save([$model->budget_id = $budget->id, $model->course_status = 1]);
              if ($model->save())
              {
            return $this->redirect(['view', 'id' => $model->id]);
              }
        }
          

        return $this->render('create', [
            'model' => $model,
            'budget' => $budget,
        ]);
    }

    /**
     * Updates an existing Courses model.
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
     * Deletes an existing Courses model.
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
     * 
     * Renders my view
     */
    public function actionMyview()
    {
        return $this->render('myview');
    }

    

    /**
     * Finds the Courses model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Courses the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Courses::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
