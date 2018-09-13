<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property int $id
 * @property int $course_id
 * @property string $allocated_budget
 * @property string $budget_spent
 * @property string $balance
 */
class Budget extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['allocated_budget', 'budget_spent', 'balance'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'allocated_budget' => 'Allocated Budget',
            'budget_spent' => 'Budget Spent',
            'balance' => 'Balance',
        ];
    }
}
