<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KaryaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karyas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karya-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Karya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_kelas',
                'value' => 'kelasesKelas.nama_kelas',
            ],
            [
                'attribute' => 'id_user',
                'value' => 'usersUser.first_name',
            ],            
            
            'nama_karya',
            'tahun_karya',
            // 'keterangan_karya:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
