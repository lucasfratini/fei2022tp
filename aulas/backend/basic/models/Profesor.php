<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $mostrar
 *
 * @property Materia[] $materias
 */
class Profesor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profesor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'mostrar'], 'required'],
            [['nombre', 'apellido'], 'string', 'max' => 128],
            [['mostrar'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'mostrar' => 'Mostrar',
        ];
    }

    /**
     * Gets query for [[Materias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterias()
    {
        return $this->hasMany(Materia::className(), ['id_profesor' => 'id']);
    }
}
