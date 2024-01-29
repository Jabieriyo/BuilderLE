<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "armas".
 *
 * @property int $idarma
 * @property string|null $nombre
 * @property int|null $valoratk
 * @property int|null $porcentfisicoatk
 * @property int|null $porcentelementalatk
 *
 * @property Builds[] $builds
 */
class Armas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'armas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valoratk', 'porcentfisicoatk', 'porcentelementalatk'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idarma' => 'Idarma',
            'nombre' => 'Nombre',
            'valoratk' => 'Valoratk',
            'porcentfisicoatk' => 'Porcentfisicoatk',
            'porcentelementalatk' => 'Porcentelementalatk',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idarma' => 'idarma']);
    }
}
