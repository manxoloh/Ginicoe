<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ownership_information".
 *
 * @property int $owner_id
 * @property string $owner_partner
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $social_security_number
 * @property string $title_in_business
 * @property string $telephone_number
 * @property string $ownership_percentage
 * @property string $dob
 * @property string $home_address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property int $customer_id
 * @property string $number_of_employees
 * @property string $sales_per_month
 * @property string $merchant_bank
 * @property string $account_manager_fn
 * @property string $physical_address
 * @property string $pcity
 * @property string $pstate
 * @property string $pzip
 * @property string $account_manager_email_address
 * @property int $industry
 *
 * @property Consumer $customer
 */
class OwnershipInformation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ownership_information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['owner_partner', 'first_name', 'middle_name', 'last_name', 'social_security_number', 'title_in_business', 'telephone_number', 'ownership_percentage', 'dob', 'home_address', 'city', 'state', 'zip', 'customer_id', 'number_of_employees', 'sales_per_month', 'merchant_bank', 'account_manager_fn', 'physical_address', 'pcity', 'pstate', 'pzip', 'account_manager_email_address', 'industry'], 'required'],
            [['dob'], 'safe'],
            [['customer_id', 'industry'], 'integer'],
            [['owner_partner', 'first_name', 'middle_name', 'last_name', 'social_security_number', 'title_in_business', 'telephone_number', 'ownership_percentage', 'home_address', 'city', 'state', 'zip', 'number_of_employees', 'sales_per_month', 'merchant_bank', 'account_manager_fn', 'physical_address', 'pcity', 'pstate', 'pzip', 'account_manager_email_address'], 'string', 'max' => 255],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Consumer::className(), 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'owner_id' => 'Owner ID',
            'owner_partner' => 'Owner Partner',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'social_security_number' => 'Social Security Number',
            'title_in_business' => 'Title In Business',
            'telephone_number' => 'Telephone Number',
            'ownership_percentage' => 'Ownership Percentage',
            'dob' => 'Dob',
            'home_address' => 'Home Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'customer_id' => 'Customer ID',
            'number_of_employees' => 'Number Of Employees',
            'sales_per_month' => 'Sales Per Month',
            'merchant_bank' => 'Merchant Bank',
            'account_manager_fn' => 'Account Manager Fn',
            'physical_address' => 'Physical Address',
            'pcity' => 'Pcity',
            'pstate' => 'Pstate',
            'pzip' => 'Pzip',
            'account_manager_email_address' => 'Account Manager Email Address',
            'industry' => 'Industry',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Consumer::className(), ['id' => 'customer_id']);
    }
}
