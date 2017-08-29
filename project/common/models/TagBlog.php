<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag_blog".
 *
 * @property integer $id
 * @property integer $tag_id
 * @property string $tag_name
 * @property integer $blog_id
 * @property string $blog_name
 * @property integer $created_at
 * @property integer $updated_at
 */
class TagBlog extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_blog';
    }

    public function behaviors()
    {
        return [
            parent::timestampBehavior()
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'tag_name', 'blog_id', 'blog_name'], 'required'],
            [['tag_id', 'blog_id', 'created_at', 'updated_at'], 'integer'],
            [['tag_name', 'blog_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_id' => 'Tag ID',
            'tag_name' => 'Tag Name',
            'blog_id' => 'Blog ID',
            'blog_name' => 'Blog Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getBlog(){
        return $this->hasOne(Blog::className(),['id'=>'blog_id']);
    }
}
