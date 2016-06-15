<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PcPlaceMainInfo */

$this->title = '新建场地';
$this->params['breadcrumbs'][] = ['label' => '场地信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-place-main-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
