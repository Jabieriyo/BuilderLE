<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "velocidadbotas".
 *
 * @property int $idbotas
 * @property int $velmovimiento
 *
 * @property Builds[] $builds
 */
class Velocidadbotas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'velocidadbotas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['velmovimiento'], 'required'],
            [['velmovimiento'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idbotas' => 'Idbotas',
            'velmovimiento' => 'Velmovimiento',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idbotas' => 'idbotas']);
    }
}
