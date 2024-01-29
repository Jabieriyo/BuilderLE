<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "armaduras".
 *
 * @property int $idarmadura
 * @property string|null $nombre
 * @property int|null $valordef
 * @property int|null $porcentfisicodef
 * @property int|null $porcentelementaldef
 *
 * @property Builds[] $builds
 */
class Armaduras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'armaduras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valordef', 'porcentfisicodef', 'porcentelementaldef'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idarmadura' => 'Idarmadura',
            'nombre' => 'Nombre',
            'valordef' => 'Valordef',
            'porcentfisicodef' => 'Porcentfisicodef',
            'porcentelementaldef' => 'Porcentelementaldef',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idarmadura' => 'idarmadura']);
    }
}
