<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PcPlaceMainInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pc-place-main-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'place_id')->textInput() ?>

    <?= $form->field($model, 'new_serial_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'new_place_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'star_rate')->textInput() ?>

    <?= $form->field($model, 'province_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'area_id')->textInput() ?>

    <?= $form->field($model, 'business_id')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'found_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_repair_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacter_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacter_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'homepage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'display_status')->textInput() ?>

    <?= $form->field($model, 'name_search_key_words')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_pinyin_search_key_words')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metro_station')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metro_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'feature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pv')->textInput() ?>

    <?= $form->field($model, 'recommend')->textInput() ?>

    <?= $form->field($model, 'preferred')->textInput() ?>

    <?= $form->field($model, 'geohash')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
