<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario_materia".
 *
 * @property int $id
 * @property int|null $id_materia
 * @property int|null $id_reserva
 * @property string|null $fh_desde
 * @property string|null $fh_hasta
 *
 * @property Materia $materia
 * @property ReservaAula $reserva
 */
class HorarioMateria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horario_materia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_materia', 'id_reserva'], 'default', 'value' => null],
            [['id_materia', 'id_reserva'], 'integer'],
            [['fh_desde', 'fh_hasta'], 'safe'],
            [['id_materia'], 'exist', 'skipOnError' => true, 'targetClass' => Materia::className(), 'targetAttribute' => ['id_materia' => 'id']],
            [['id_reserva'], 'exist', 'skipOnError' => true, 'targetClass' => ReservaAula::className(), 'targetAttribute' => ['id_reserva' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_materia' => 'Id Materia',
            'id_reserva' => 'Id Reserva',
            'fh_desde' => 'Fh Desde',
            'fh_hasta' => 'Fh Hasta',
        ];
    }

    /**
     * Gets query for [[Materia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMateria()
    {
        return $this->hasOne(Materia::className(), ['id' => 'id_materia']);
    }

    /**
     * Gets query for [[Reserva]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReserva()
    {
        return $this->hasOne(ReservaAula::className(), ['id' => 'id_reserva']);
    }
}
