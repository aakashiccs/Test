<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $post_id
 * @property string $post_title
 * @property string $post_description
 * @property int $author_id
 * @property int|null $status
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_title', 'post_description', 'author_id'], 'required'],
            [['author_id', 'status'], 'integer'],
            [['post_title'], 'string', 'max' => 100],
            [['post_description'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_description' => 'Post Description',
            'author_id' => 'Author ID',
            'status' => 'Status',
        ];
    }
}
