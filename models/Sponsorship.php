<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sponsorship".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 */
class Sponsorship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sponsorship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'description'], 'required'],
            [['type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'description' => 'Description',
        ];
    }
}
