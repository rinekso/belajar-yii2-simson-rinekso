<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Kelas]].
 *
 * @see Kelas
 */
class KelasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Kelas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Kelas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
