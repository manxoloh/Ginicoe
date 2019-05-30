<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "merchant".
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property int $user_id
 * @property string $date_of_birth
 * @property int $social_security_number
 * @property string $primary_telephone_number
 * @property string $alternate_telephone_number
 * @property string $physical_house_number_of_primary_residence
 * @property string $street_name
 * @property string $urbanization_name
 * @property string $state
 * @property string $city
 * @property string $zip_code
 * @property int $have_you_lived_at_this_address_for_2_years_or_more
 * @property int $how_many_people_are_in_your_household
 * @property string $physical_house_number_of_previous_primary_esidence
 * @property string $pstreet_name
 * @property string $purbanization_name
 * @property string $pstate
 * @property string $pcity
 * @property string $pzip_code
 * @property int $you_own_a_second_or_investment_property
 */
class Merchant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'merchant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'middle_name', 'last_name', 'user_id', 'date_of_birth', 'social_security_number', 'primary_telephone_number', 'physical_house_number_of_primary_residence', 'street_name', 'urbanization_name', 'state', 'city', 'zip_code'], 'required'],
            [['user_id', 'social_security_number', 'have_you_lived_at_this_address_for_2_years_or_more', 'how_many_people_are_in_your_household', 'you_own_a_second_or_investment_property'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'date_of_birth', 'primary_telephone_number', 'alternate_telephone_number', 'physical_house_number_of_primary_residence', 'street_name', 'urbanization_name', 'state', 'city', 'zip_code', 'physical_house_number_of_previous_primary_esidence', 'pstreet_name', 'purbanization_name', 'pstate', 'pcity', 'pzip_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'user_id' => 'User ID',
            'date_of_birth' => 'Date Of Birth',
            'social_security_number' => 'Social Security Number',
            'primary_telephone_number' => 'Primary Telephone Number',
            'alternate_telephone_number' => 'Alternate Telephone Number',
            'physical_house_number_of_primary_residence' => 'Physical House Number Of Primary Residence',
            'street_name' => 'Street Name',
            'urbanization_name' => 'Urbanization Name',
            'state' => 'State',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'have_you_lived_at_this_address_for_2_years_or_more' => 'Have You Lived At This Address For 2 Years Or More',
            'how_many_people_are_in_your_household' => 'How Many People Are In Your Household',
            'physical_house_number_of_previous_primary_esidence' => 'Physical House Number Of Previous Primary Esidence',
            'pstreet_name' => 'Pstreet Name',
            'purbanization_name' => 'Purbanization Name',
            'pstate' => 'Pstate',
            'pcity' => 'Pcity',
            'pzip_code' => 'Pzip Code',
            'you_own_a_second_or_investment_property' => 'You Own A Second Or Investment Property',
        ];
    }
}
