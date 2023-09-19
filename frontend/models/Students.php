<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email', 'phone'], 'required'],
            [['firstname'], 'string', 'max' => 50],
            [['lastname'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 56],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }
}
