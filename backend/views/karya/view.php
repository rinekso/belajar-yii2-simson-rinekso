<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Karya */

$this->title = $model->id_karya;
$this->params['breadcrumbs'][] = ['label' => 'Karyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karya-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_karya], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_karya], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_karya',
            'id_kelas',
            'id_user',
            'nama_karya',
            'tahun_karya',
            'keterangan_karya:ntext',
        ],
    ]) ?>

</div>
