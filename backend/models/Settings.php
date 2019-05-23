<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $title
 * @property string $address1
 * @property string $address2
 * @property string $email
 * @property string $phone1
 * @property string $phone2
 * @property string $header
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'address1', 'address2', 'email', 'phone1', 'phone2', 'header'], 'required'],
            [['address1', 'address2'], 'string'],
            [['title', 'email', 'header'], 'string', 'max' => 100],
            [['phone1', 'phone2'], 'string', 'max' => 50],
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
            'address1' => 'Address1',
            'address2' => 'Address2',
            'email' => 'Email',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'header' => 'Header',
        ];
    }
}
