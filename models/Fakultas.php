<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $id_fakultas
 * @property string $nama_fakultas
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fakultas', 'nama_fakultas'], 'required'],
            [['id_fakultas'], 'integer'],
            [['nama_fakultas'], 'string', 'max' => 80],
            [['id_fakultas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fakultas' => 'Id Fakultas',
            'nama_fakultas' => 'Nama Fakultas',
        ];
    }
}
