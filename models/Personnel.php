<?php

namespace app\models;

use Yii;
use app\models\Participants;

/**
 * This is the model class for table "personnel".
 *
 * @property int $id
 * @property string $full_name
 * @property string $gender
 * @property string $designation
 * @property string $work_station
 */
class Personnel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personnel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'designation', 'work_station'], 'required'],
            [['gender'], 'string'],
            [['full_name', 'designation', 'work_station'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'gender' => 'Gender',
            'designation' => 'Designation',
            'work_station' => 'Work Station',
        ];
    }
    
     /**
     * @return \yii\db\ActiveQuery
     */
   public function getCourse()
    {
        return $this->hasOne(Participants::className(), ['personnel_id' => 'id']);
        
    }
}
