<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlaceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pc-place-main-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'place_id') ?>

    <?= $form->field($model, 'new_serial_number') ?>

    <?= $form->field($model, 'place_name') ?>

    <?= $form->field($model, 'new_place_type') ?>

    <?= $form->field($model, 'star_rate') ?>

    <?php // echo $form->field($model, 'province_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'business_id') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'postcode') ?>

    <?php // echo $form->field($model, 'place_desc') ?>

    <?php // echo $form->field($model, 'found_time') ?>

    <?php // echo $form->field($model, 'tax_rate') ?>

    <?php // echo $form->field($model, 'last_repair_time') ?>

    <?php // echo $form->field($model, 'contacter_name') ?>

    <?php // echo $form->field($model, 'contacter_phone') ?>

    <?php // echo $form->field($model, 'fax_number') ?>

    <?php // echo $form->field($model, 'homepage') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'display_status') ?>

    <?php // echo $form->field($model, 'name_search_key_words') ?>

    <?php // echo $form->field($model, 'name_pinyin_search_key_words') ?>

    <?php // echo $form->field($model, 'metro_station') ?>

    <?php // echo $form->field($model, 'metro_line') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'group_id') ?>

    <?php // echo $form->field($model, 'feature') ?>

    <?php // echo $form->field($model, 'pv') ?>

    <?php // echo $form->field($model, 'recommend') ?>

    <?php // echo $form->field($model, 'preferred') ?>

    <?php // echo $form->field($model, 'geohash') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
