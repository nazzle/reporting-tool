<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sectors".
 *
 * @property int $id
 * @property string $name
 * @property string $synonym
 * @property string $descriptions
 */
class Sectors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sectors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'synonym', 'descriptions'], 'required'],
            [['descriptions'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['synonym'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'synonym' => 'Sector/Cadre',
            'descriptions' => 'Descriptions',
        ];
    }
}
