<?php

namespace app\models;

use Yii;
use app\models\Sectors;
use app\models\Sponsorship;
use app\models\Budget;
use app\models\Status;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property string $course_name
 * @property string $category
 * @property int $sector_id
 * @property string $duration
 * @property string $start_date
 * @property string $finish_date
 * @property int $sponsorship_id
 * @property string $venue
 * @property int $budget_id
 * @property string $objective
 * @property string $facilitator
 * @property int $course_status
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_name', 'category', 'sector_id', 'duration', 'start_date', 'finish_date', 'sponsorship_id', 'venue'], 'required'],
            [['category'], 'string'],
            [['sector_id', 'sponsorship_id', 'budget_id', 'course_status'], 'integer'],
            [['start_date', 'finish_date'], 'safe'],
            [['course_name','objective'], 'string', 'max' => 500],
            [['duration'], 'string', 'max' => 15],
            [['venue', 'facilitator'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_name' => 'Course Name',
            'category' => 'Category',
            'sector_id' => 'Sector/Cadre',
            'duration' => 'Duration',
            'start_date' => 'Start Date',
            'finish_date' => 'Finish Date',
            'sponsorship_id' => 'Sponsorship',
            'venue' => 'Venue',
            'budget_id' => 'Allocated Budget',
            'objective' => 'Objective',
            'facilitator' => 'Facilitator',
            'course_status' => 'Course Status',
        ];
    }
    
     /**
     * @return \yii\db\ActiveQuery
     */
   public function getSectors()
    {
        return $this->hasOne(Sectors::className(), ['id' => 'sector_id']);
        
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
   public function getBudget()
    {
        return $this->hasOne(Budget::className(), ['id' => 'budget_id']);
        
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
   public function getSponsorship()
    {
        return $this->hasOne(Sponsorship::className(), ['id' => 'sponsorship_id']);
        
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
   public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'course_status']);
        
    }
}
