<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anillos".
 *
 * @property int $idanillo
 * @property string|null $nombre
 * @property int|null $probcrit
 *
 * @property Builds[] $builds
 */
class Anillos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anillos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['probcrit'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idanillo' => 'Idanillo',
            'nombre' => 'Nombre',
            'probcrit' => 'Probcrit',
        ];
    }

    /**
     * Gets query for [[Builds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilds()
    {
        return $this->hasMany(Builds::class, ['idanillo' => 'idanillo']);
    }
}
