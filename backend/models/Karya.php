<?php

namespace backend\models;

use Yii;
use backend\models\Kelas;
use backend\models\User;

/**
 * This is the model class for table "karya".
 *
 * @property integer $id_karya
 * @property integer $id_kelas
 * @property integer $id_user
 * @property string $nama_karya
 * @property integer $tahun_karya
 * @property string $keterangan_karya
 */
class Karya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karya';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kelas', 'nama_karya', 'tahun_karya', 'keterangan_karya'], 'required'],
            [['id_kelas', 'id_user', 'tahun_karya'], 'integer'],
            [['id_user'],'required', 'message' => 'Please select the user'],
            [['keterangan_karya'], 'string'],
            [['nama_karya'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_karya' => 'Id Karya',
            'id_kelas' => 'Kelas',
            'id_user' => 'User',
            'nama_karya' => 'Nama Karya',
            'tahun_karya' => 'Tahun Karya',
            'keterangan_karya' => 'Keterangan Karya',
        ];
    }

    /**
     * @inheritdoc
     * @return KaryaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KaryaQuery(get_called_class());
    }

    public function getKelasesKelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'id_kelas']);
    }
    public function getUsersUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
