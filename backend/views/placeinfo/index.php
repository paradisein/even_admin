<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '场地信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-place-main-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新建场地', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'place_id',
            'new_serial_number',
            'place_name',
            'new_place_type',
            'star_rate',
            // 'province_id',
            // 'city_id',
            // 'area_id',
            // 'business_id',
            // 'address',
            // 'postcode',
            // 'place_desc:ntext',
            // 'found_time',
            // 'tax_rate',
            // 'last_repair_time',
            // 'contacter_name',
            // 'contacter_phone',
            // 'fax_number',
            // 'homepage',
            // 'create_time',
            // 'update_time',
            // 'display_status',
            // 'name_search_key_words',
            // 'name_pinyin_search_key_words',
            // 'metro_station',
            // 'metro_line',
            // 'location',
            // 'brand_id',
            // 'group_id',
            // 'feature',
            // 'pv',
            // 'recommend',
            // 'preferred',
            // 'geohash',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
