<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cascos".
 *
 * @property int $idcasco
 * @property string|null $nombre
 * @property int|null $vidaextra
 * @property int|null $regen
 *
 * @property Builds[] $builds
 */
class Cascos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cascos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vidaextra', 'regen'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcasco' => 'Idcasco',
            'nombre' => 'Nombre',
            'vidaextra' => 'Vidaextra',
            'regen' => 'Regen',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idcascos' => 'idcasco']);
    }
}
