<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "botas".
 *
 * @property int $idbotas
 * @property string|null $nombre
 * @property int|null $porcentevasion
 *
 * @property Builds[] $builds
 */
class Botas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'botas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['porcentevasion'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idbotas' => 'Idbotas',
            'nombre' => 'Nombre',
            'porcentevasion' => 'Porcentevasion',
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
