<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personajes".
 *
 * @property int $idpersonaje
 * @property string|null $nombreesp
 * @property string|null $descripcion
 *
 * @property Builds[] $builds
 */
class Personajes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personajes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombreesp'], 'string', 'max' => 25],
            [['descripcion'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpersonaje' => 'Idpersonaje',
            'nombreesp' => 'Nombreesp',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idpersonaje' => 'idpersonaje']);
    }
}
