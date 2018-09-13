<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use app\models\LongMwajiri;
use app\models\Participants;
use app\models\Courses;


/**
 * ReportsController implements the CRUD actions for Reports model.
 */

class ReportsController extends Controller
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
     * uses all models that contributes to reports generation.
     * @return mixed
     */
    
    public function actionIndextttt()
    {
//        $searchModel = new PersonnelSearch();
//        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//        $participants = Participants::find()->select('personnel_id')->where(['course_id'=>$id]);
//        $dataProvider = new ActiveDataProvider([
//        'query' => Personnel::find()->Where(['in','id',$participants])]);
//        
//        return $this->render('longMwajiri', [
//            'model' => $this->findModel($id),
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
        $file = \Yii::createObject([
        'class' => 'codemix\excelexport\ExcelFile',
        'writerClass' => '\PHPExcel_Writer_Excel5', // Override default of `\PHPExcel_Writer_Excel2007`
        'sheets' => [
            'Participated Staffs' => [
                'class' => 'codemix\excelexport\ActiveExcelSheet',
//                'query' => \app\models\Participants::find()
//                            ->select(['personnel.full_name', 'courses.category'])
//                            ->leftJoin('personnel', $on = ['participants.personnel_id' => 'personnel.id'])
//                            //->leftJoin('personnel', 'participants.personnel_id = personnel.id')\
//                            ->leftJoin('courses', $on = ['participants.course_id' => 'courses.id']),
//                           // ->leftJoin('courses', 'participants.course_id = courses.id')
//                           // ->andWhere(['courses.category' => 'SHORT']),
//                           // If not specified, all attributes from `User::attributes()` are used
                'query' => \app\models\Personnel::find()
                            ->select(['personnel.full_name','personnel.designation'])
                            ->from('personnel','courses')
                            //->innerJoin('courses','courses.id = participants.course_id')
                            ->andWhere('personnel.id = participants.personnel_id')
                            ->andWhere('participants.course_id = course.id')
                            ->where(['courses.category' => ['SHORT']]),
                'attributes' => [
                    'full_name',
                    'designation',
                    //'course.category'
                      ],
                 ],
             ],
        ]);
        $file->send('Participants.xls');


    }
    /**
     * 
     * @return type
     * This action will prompt a form for query filtering
     * on 'Watumishi waliopo masomoni waliodhaminiwa na mwari' report.
     */
    public function actionLongmwajiriform()
    {
      $courses = new Courses();
      $personnel = new Personnel();
      
      return $this->render('longMwajiriForm',[
          'courses' => $courses,
          'personnel' => $personnel,
      ]);
    }

        /**
     * 
     * @return type
     * This action display the report that is queried by the longMwajiriForm action
     * customize the query from the form input.
     */
    public function actionIndex() {
        $searchModel = new LongMwajiri();
        $dataProvider = new ActiveDataProvider([
        'query' => Participants::find()
                ->andWhere([$this->personnel->gender => 'M'])
//                ->andWhere(['gender' => 'M'])
//                ->andWhere(['work_station' => 'JDU'])
//                ->andWhere(['category' => 'LONG'])
//                ->andWhere(['sector_id' => 1])
                ]);
        
        return $this->render('longMwajiri', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider  
        ]);
    }
}