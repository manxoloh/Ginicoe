<?php
namespace frontend\models;

use Yii;
use kartik\password\StrengthValidator;
use yii\base\Model;
use common\models\User;
use EmailChecker\EmailChecker;
use Eusonlito\DisposableEmail\Check;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $confirm_password;
    public $user_type;
    public $terms_and_conditions = true;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [            
            ['user_type', 'required'],
            ['terms_and_conditions', 'required'],
            
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['email', 'validateEmail'],
            
            ['password', 'required'],
            ['password', 'string', 'min' => 8, 'max' => 20],
            [['password'], StrengthValidator::className(), 'preset'=>'strong', 'userAttribute'=>'username'],
            
            ['confirm_password', 'required'],
            ['confirm_password', 'compare', 'compareAttribute'=>'password', 'message'=>'Password do not match'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->user_type = $this->user_type;
        $user->terms_and_conditions = $this->terms_and_conditions;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        return $user->save() && $this->sendEmail($user);

    }
    
    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $checker = new EmailChecker();
            if(!$checker->isValid($this->email)){
                $this->addError($attribute, 'Email is not a valid email address.');
            }
            if(!Check::email($this->email)){
                $this->addError($attribute, 'Email is not a valid email address.');
            }
        }
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
