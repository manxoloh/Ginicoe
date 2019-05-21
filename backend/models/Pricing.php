<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pricing".
 *
 * @property int $id
 * @property int $product_id
 * @property string $title
 * @property string $detail
 * @property int $price
 *
 * @property Solution $product
 */
class Pricing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pricing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'title', 'detail', 'price'], 'required'],
            [['product_id', 'price'], 'integer'],
            [['detail'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Solution::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'title' => 'Title',
            'detail' => 'Detail',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Solution::className(), ['id' => 'product_id']);
    }
}
