<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slidder".
 *
 * @property int $id
 * @property string $title
 * @property string $tag_line
 * @property string $detail
 * @property string $image
 */
class Slidder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    
    public static function tableName()
    {
        return 'slidder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'tag_line', 'detail'], 'required'],
            [['detail'], 'string'],
            [['title', 'tag_line', 'image'], 'string', 'max' => 200],
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
            'tag_line' => 'Tag Line',
            'detail' => 'Detail',
            'image' => 'Image',
        ];
    }
}
