<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $user_id
 * @property string $title
 * @property string $author
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'author'], 'required'],
            [['user_id'], 'integer'],
            [['title', 'author'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'title' => 'Title',
            'author' => 'Author',
        ];
    }
public function beforeSave($insert)
{
    if ($this->isNewRecord)
    {
	//set the user id to id of user
	$this->user_id = Yii::app->user->id;
    }
 
    return parent::beforeSave($insert);
}
}
