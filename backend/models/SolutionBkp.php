<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "solution".
 *
 * @property int $id
 * @property string $title
 * @property string $detail
 * @property string $icon
 * @property string $action
 */
class Solution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName()
    {
        return 'solution';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'detail', 'icon', 'action'], 'required'],
            [['detail'], 'string'],
            [['title', 'image'], 'string', 'max' => 50],
            [['icon', 'action'], 'string', 'max' => 30],
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
            'icon' => 'Icon',
            'action' => 'Action',
            'image' => 'Image',
        ];
    }
}
