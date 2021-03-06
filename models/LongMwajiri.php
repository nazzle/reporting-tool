<?php

namespace app\models;

use Yii;
use app\models\Courses;
use app\models\Personnel;

/**
 * This is the model class for table "participants".
 *
 * @property int $id
 * @property int $course_id
 * @property int $personnel_id
 * @property string $attachment
 * @property int $attendance_status
 */
class LongMwajiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id'], 'required'],
            [['course_id', 'personnel_id', 'attendance_status'], 'integer'],
            [['attachment'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Training/Course',
            'personnel_id' => 'Participants',
            'attachment' => 'Attachment',
            'attendance_status' => 'Attendance Status',
        ];
    }
    
 /**
     * {@inheritdoc}
     */   
    public function relations()
{
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array(
//        'co' => array(self::BELONGS_TO, 'Country', 'co_id'),
        'personnels' => array(self::HAS_MANY, 'personnel', 'participants'),
        'courses' => array(self::HAS_MANY, 'courses', 'participants'), /// here 
//        'users' => array(self::HAS_MANY, 'Users', 'city'),
    );
}
    
     /**
     * @return \yii\db\ActiveQuery
     */
   public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'attendance_status']);
        
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
   public function getCourse()
    {
        return $this->hasOne(Courses::className(), ['id' => 'course_id']);
        
    }
    /**
     * @return \yii\db\ActiveQuery
     */
   public function getPersonnel()
    {
        return $this->hasOne(Personnel::className(), ['id' => 'personnel_id']);
        
    }
}
