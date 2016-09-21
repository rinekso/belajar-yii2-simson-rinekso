<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Kelas;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\Karya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="karya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kelas')->dropDownList(
        ArrayHelper::map(Kelas::find()->all(),'id_kelas','nama_kelas'),
        ['prompt' => 'Select Kelas']
    ) ?>

    <?= $form->field($model, 'id_user')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','first_name'),
        ['prompt' => 'Select User']
    ) ?>

    <?= $form->field($model, 'nama_karya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_karya')->textInput() ?>

    <?= $form->field($model, 'keterangan_karya')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
