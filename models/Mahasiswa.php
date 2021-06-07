<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nama
 * @property string $jekel
 * @property string $tgllahir
 * @property string $tmptlahir
 * @property int $id_fakultas
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jekel', 'tgllahir', 'tmptlahir', 'id_fakultas'], 'required'],
            [['tgllahir'], 'safe'],
            [['id_fakultas'], 'integer'],
            [['nama', 'tmptlahir'], 'string', 'max' => 50],
            [['jekel'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jekel' => 'Jenis Kelamin',
            'tgllahir' => 'Tanggal Lahir',
            'tmptlahir' => 'Tempat Lahir',
            'id_fakultas' => 'Id Fakultas',
        ];
    }
}
