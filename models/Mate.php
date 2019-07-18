<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mate".
 *
 * @property string $id
 * @property string $name
 * @property string $gender
 * @property string $birthday
 * @property string $graduation
 * @property string $unit
 * @property string $job
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $commend
 */
class Mate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'gender', 'birthday', 'graduation', 'phone'], 'required','message'=>'不能为空！'],
            [['commend'], 'string'],
            [['name', 'email'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 4],
            [['birthday'], 'string', 'max' => 30],
            [['unit', 'job'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['graduation', 'phone', 'teacher'], 'string', 'max' => 20],
            ['email','email','message'=>"这不是一个邮箱地址！"],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'gender' => '性别',
            'birthday' => '出生日期',
            'graduation' => '毕业年份',
            'unit' => '工作单位',
            'job' => '担任职务',
            'address' => '居住地址',
            'phone' => '联系电话',
            'email' => '邮箱',
            'teacher' => '班主任姓名',
            'regtime' => '填表日期',
            'commend' => '优秀校友推荐（姓名+电话）',
        ];
    }
}
