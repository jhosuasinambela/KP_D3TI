<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "new_user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $authKey
 */
class NewUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'new_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'username', 'password', 'authKey'], 'required'],
            [['firstname', 'lastname', 'username', 'password'], 'string', 'max' => 255],
            [['authKey'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
        ];
    }

    public function getAuthKey(): string {
        return $this->authKey;
    }

    public function getId() {
        return $this->id_user;
    }

    public function validateAuthKey($authKey): bool {
        return $this->authKey === $authKey;
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException(); 
    }
    
     public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }
    
    public function ValidatePassword($password){
        return $this->password === $password;
    }

}
