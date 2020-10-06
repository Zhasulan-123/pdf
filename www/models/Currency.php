<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%currency}}".
 *
 * @property int $id
 * @property string $name
 * @property float $rate
 * @property string $date
 * @property string $created_at
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%currency}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'rate', 'date', 'created_at'], 'required'],
            [['rate'], 'number'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 5],
            [['date'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'rate' => 'Rate',
            'date' => 'Date',
            'created_at' => 'Created At',
        ];
    }
}
