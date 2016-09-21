<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KaryaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karya-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_karya') ?>

    <?= $form->field($model, 'id_kelas') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'nama_karya') ?>

    <?= $form->field($model, 'tahun_karya') ?>

    <?php // echo $form->field($model, 'keterangan_karya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
