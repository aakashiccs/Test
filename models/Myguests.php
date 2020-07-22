<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_guests".
 *
 * @property int $id
 * @property string $First Name
 * @property string $Last Name
 * @property string $email_id
 * @property resource $Description
 */
class Myguests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_guests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'First Name', 'Last Name', 'email_id', 'Description'], 'required'],
            [['id'], 'integer'],
            [['Description'], 'string'],
            [['First Name', 'Last Name', 'email_id'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'First Name' => 'First Name',
            'Last Name' => 'Last Name',
            'email_id' => 'Email ID',
            'Description' => 'Description',
        ];
    }
}
