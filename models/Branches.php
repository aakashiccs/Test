<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property int $id
 * @property string $Country
 * @property string $Branch_name
 * @property string $Branch_Address
 * @property string $Branch_status
 */
class Branches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Country', 'Branch_name', 'Branch_Address', 'Branch_status'], 'required'],
            [['Country'], 'string', 'max' => 20],
            [['Branch_name', 'Branch_Address', 'Branch_status'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Country' => 'Country',
            'Branch_name' => 'Branch Name',
            'Branch_Address' => 'Branch Address',
            'Branch_status' => 'Branch Status',
        ];
    }
}
