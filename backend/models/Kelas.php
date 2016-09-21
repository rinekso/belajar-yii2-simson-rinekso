<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property integer $id_kelas
 * @property string $nama_kelas
 * @property string $jurusan_kelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kelas', 'jurusan_kelas'], 'required'],
            [['nama_kelas', 'jurusan_kelas'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama_kelas' => 'Nama Kelas',
            'jurusan_kelas' => 'Jurusan Kelas',
        ];
    }

    /**
     * @inheritdoc
     * @return KelasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KelasQuery(get_called_class());
    }
}
