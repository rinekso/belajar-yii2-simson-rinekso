<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Karya */

$this->title = 'Update Karya: ' . $model->id_karya;
$this->params['breadcrumbs'][] = ['label' => 'Karyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_karya, 'url' => ['view', 'id' => $model->id_karya]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="karya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
