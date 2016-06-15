<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PcPlaceMainInfo */

$this->title = $model->place_id;
$this->params['breadcrumbs'][] = ['label' => 'Pc Place Main Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-place-main-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->place_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->place_id], [
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
            'place_id',
            'new_serial_number',
            'place_name',
            'new_place_type',
            'star_rate',
            'province_id',
            'city_id',
            'area_id',
            'business_id',
            'address',
            'postcode',
            'place_desc:ntext',
            'found_time',
            'tax_rate',
            'last_repair_time',
            'contacter_name',
            'contacter_phone',
            'fax_number',
            'homepage',
            'create_time',
            'update_time',
            'display_status',
            'name_search_key_words',
            'name_pinyin_search_key_words',
            'metro_station',
            'metro_line',
            'location',
            'brand_id',
            'group_id',
            'feature',
            'pv',
            'recommend',
            'preferred',
            'geohash',
        ],
    ]) ?>

</div>
