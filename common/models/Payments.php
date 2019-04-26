<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payments".
 *
 * @property int $id
 * @property int $payee_id
 * @property int $amount
 * @property string $transaction_date
 * @property string $description
 */
class Payments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payee_id', 'amount', 'description'], 'required'],
            [['payee_id', 'amount'], 'integer'],
            [['transaction_date'], 'safe'],
            [['description'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payee_id' => 'Payee ID',
            'amount' => 'Amount',
            'transaction_date' => 'Transaction Date',
            'description' => 'Description',
        ];
    }
}
