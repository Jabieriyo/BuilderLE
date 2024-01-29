<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "builds".
 *
 * @property string $nombre
 * @property string|null $descripcion
 * @property string|null $fcreacion
 * @property int|null $efectividad
 * @property int|null $complejidad
 * @property int|null $idpersonaje
 * @property int|null $idcascos
 * @property int|null $idcollar
 * @property int|null $idarma
 * @property int|null $idarmadura
 * @property int|null $idbotas
 * @property int|null $idanillo
 * @property int|null $idvelbotas
 *
 * @property Anillos $idanillo0
 * @property Armas $idarma0
 * @property Armaduras $idarmadura0
 * @property Botas $idbotas0
 * @property Velocidadbotas $idbotas1
 * @property Cascos $idcascos0
 * @property Collares $idcollar0
 * @property Personajes $idpersonaje0
 */
class Builds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'builds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['fcreacion'], 'safe'],
            [['efectividad', 'complejidad', 'idpersonaje', 'idcascos', 'idcollar', 'idarma', 'idarmadura', 'idbotas', 'idanillo', 'idvelbotas'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 500],
            [['idpersonaje', 'idcascos', 'idcollar', 'idarma', 'idarmadura', 'idbotas'], 'unique', 'targetAttribute' => ['idpersonaje', 'idcascos', 'idcollar', 'idarma', 'idarmadura', 'idbotas']],
            [['nombre'], 'unique'],
            [['idanillo'], 'exist', 'skipOnError' => true, 'targetClass' => Anillos::class, 'targetAttribute' => ['idanillo' => 'idanillo']],
            [['idarmadura'], 'exist', 'skipOnError' => true, 'targetClass' => Armaduras::class, 'targetAttribute' => ['idarmadura' => 'idarmadura']],
            [['idarma'], 'exist', 'skipOnError' => true, 'targetClass' => Armas::class, 'targetAttribute' => ['idarma' => 'idarma']],
            [['idbotas'], 'exist', 'skipOnError' => true, 'targetClass' => Botas::class, 'targetAttribute' => ['idbotas' => 'idbotas']],
            [['idcascos'], 'exist', 'skipOnError' => true, 'targetClass' => Cascos::class, 'targetAttribute' => ['idcascos' => 'idcasco']],
            [['idcollar'], 'exist', 'skipOnError' => true, 'targetClass' => Collares::class, 'targetAttribute' => ['idcollar' => 'idcollar']],
            [['idpersonaje'], 'exist', 'skipOnError' => true, 'targetClass' => Personajes::class, 'targetAttribute' => ['idpersonaje' => 'idpersonaje']],
            [['idbotas'], 'exist', 'skipOnError' => true, 'targetClass' => Velocidadbotas::class, 'targetAttribute' => ['idbotas' => 'idbotas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fcreacion' => 'Fcreacion',
            'efectividad' => 'Efectividad',
            'complejidad' => 'Complejidad',
            'idpersonaje' => 'Idpersonaje',
            'idcascos' => 'Idcascos',
            'idcollar' => 'Idcollar',
            'idarma' => 'Idarma',
            'idarmadura' => 'Idarmadura',
            'idbotas' => 'Idbotas',
            'idanillo' => 'Idanillo',
            'idvelbotas' => 'Idvelbotas',
        ];
    }

    /**
     * Gets query for [[Idanillo0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdanillo0()
    {
        return $this->hasOne(Anillos::class, ['idanillo' => 'idanillo']);
    }

    /**
     * Gets query for [[Idarma0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdarma0()
    {
        return $this->hasOne(Armas::class, ['idarma' => 'idarma']);
    }

    /**
     * Gets query for [[Idarmadura0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdarmadura0()
    {
        return $this->hasOne(Armaduras::class, ['idarmadura' => 'idarmadura']);
    }

    /**
     * Gets query for [[Idbotas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdbotas0()
    {
        return $this->hasOne(Botas::class, ['idbotas' => 'idbotas']);
    }

    /**
     * Gets query for [[Idbotas1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdbotas1()
    {
        return $this->hasOne(Velocidadbotas::class, ['idbotas' => 'idbotas']);
    }

    /**
     * Gets query for [[Idcascos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcascos0()
    {
        return $this->hasOne(Cascos::class, ['idcasco' => 'idcascos']);
    }

    /**
     * Gets query for [[Idcollar0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcollar0()
    {
        return $this->hasOne(Collares::class, ['idcollar' => 'idcollar']);
    }

    /**
     * Gets query for [[Idpersonaje0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpersonaje0()
    {
        return $this->hasOne(Personajes::class, ['idpersonaje' => 'idpersonaje']);
    }
}
