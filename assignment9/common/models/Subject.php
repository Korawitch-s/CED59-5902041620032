<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $id
 * @property string $name
 * @property string $section
 * @property int $tech_id
 * @property string $detail
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['tech_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['detail'], 'string'],
            [['name'], 'string', 'max' => 256],
            [['section'], 'string', 'max' => 255],
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
            'section' => 'Section',
            'tech_id' => 'Tech ID',
            'detail' => 'Detail',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }
}
