<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "collares".
 *
 * @property int $idcollar
 * @property string|null $nombre
 * @property string|null $efectoesp
 *
 * @property Builds[] $builds
 */
class Collares extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'collares';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 50],
            [['efectoesp'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcollar' => 'Idcollar',
            'nombre' => 'Nombre',
            'efectoesp' => 'Efectoesp',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idcollar' => 'idcollar']);
    }
}
