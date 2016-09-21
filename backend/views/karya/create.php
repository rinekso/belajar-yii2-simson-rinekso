<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Karya */

$this->title = 'Create Karya';
$this->params['breadcrumbs'][] = ['label' => 'Karyas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
