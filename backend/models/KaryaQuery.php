<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Karya]].
 *
 * @see Karya
 */
class KaryaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Karya[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Karya|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
