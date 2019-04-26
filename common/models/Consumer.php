<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "consumer".
 *
 * @property int $id
 * @property int $user_id
 * @property string $business_legal_name
 * @property string $business_dba_name
 * @property string $business_structure
 * @property int $home_based
 * @property string $business_legal_address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $business_physical_address
 * @property string $pcity
 * @property string $pstate
 * @property string $pzip
 * @property int $federal_tax_id
 * @property string $merchant_duns_number
 * @property string $first_name
 * @property string $middle_name
 * @property string $telephone_number
 * @property string $toll_free_number
 * @property string $fax_number
 * @property string $mobile_number
 * @property string $email_address
 * @property string $created_at
 *
 * @property User $user
 */
class Consumer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'business_legal_name', 'business_dba_name', 'business_structure', 'home_based', 'business_legal_address', 'city', 'state', 'zip', 'federal_tax_id', 'merchant_duns_number', 'first_name', 'middle_name', 'telephone_number', 'toll_free_number', 'fax_number', 'mobile_number', 'email_address'], 'required'],
            [['user_id', 'home_based', 'federal_tax_id'], 'integer'],
            [['created_at'], 'safe'],
            [['business_legal_name', 'business_dba_name', 'business_structure', 'business_legal_address', 'city', 'state', 'zip', 'business_physical_address', 'pcity', 'pstate', 'pzip', 'merchant_duns_number', 'first_name', 'middle_name', 'telephone_number', 'toll_free_number', 'fax_number', 'mobile_number', 'email_address'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'business_legal_name' => 'Business Legal Name',
            'business_dba_name' => 'Business Dba Name',
            'business_structure' => 'Business Structure',
            'home_based' => 'Home Based',
            'business_legal_address' => 'Business Legal Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'business_physical_address' => 'Business Physical Address',
            'pcity' => 'Pcity',
            'pstate' => 'Pstate',
            'pzip' => 'Pzip',
            'federal_tax_id' => 'Federal Tax ID',
            'merchant_duns_number' => 'Merchant Duns Number',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'telephone_number' => 'Telephone Number',
            'toll_free_number' => 'Toll Free Number',
            'fax_number' => 'Fax Number',
            'mobile_number' => 'Mobile Number',
            'email_address' => 'Email Address',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
