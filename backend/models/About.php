<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string $detail
 * @property string $image
 * @property string $action
 * @property int $active
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'detail', 'action', 'active'], 'required'],
            [['detail', 'image'], 'string'],
            [['active'], 'integer'],
            [['title'], 'string', 'max' => 30],
            [['action'], 'string', 'max' => 30],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'detail' => 'Detail',
            'image' => 'Image',
            'action' => 'Action',
            'active' => 'Active',
            'file' => 'File',
        ];
    }

}
