<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "industries".
 *
 * @property int $ind_id
 * @property string $industry
 * @property string $approved
 */
class Industries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'industries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['industry'], 'string', 'max' => 45],
            [['approved'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ind_id' => 'Ind ID',
            'industry' => 'Industry',
            'approved' => 'Approved',
        ];
    }
}
