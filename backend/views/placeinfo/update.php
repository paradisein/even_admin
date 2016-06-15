<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PcPlaceMainInfo */

$this->title = '修改场地信息: ' . ' ' . $model->place_id;
$this->params['breadcrumbs'][] = ['label' => '场地信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->place_id, 'url' => ['view', 'id' => $model->place_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pc-place-main-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
