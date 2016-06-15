<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pc_place_main_info".
 *
 * @property integer $place_id
 * @property string $new_serial_number
 * @property string $place_name
 * @property string $new_place_type
 * @property integer $star_rate
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $area_id
 * @property integer $business_id
 * @property string $address
 * @property string $postcode
 * @property string $place_desc
 * @property string $found_time
 * @property string $tax_rate
 * @property string $last_repair_time
 * @property string $contacter_name
 * @property string $contacter_phone
 * @property string $fax_number
 * @property string $homepage
 * @property string $create_time
 * @property string $update_time
 * @property integer $display_status
 * @property string $name_search_key_words
 * @property string $name_pinyin_search_key_words
 * @property string $metro_station
 * @property string $metro_line
 * @property string $location
 * @property integer $brand_id
 * @property integer $group_id
 * @property string $feature
 * @property integer $pv
 * @property integer $recommend
 * @property integer $preferred
 * @property string $geohash
 */
class PcPlaceMainInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pc_place_main_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place_id', 'new_serial_number', 'place_name'], 'required'],
            [['place_id', 'star_rate', 'province_id', 'city_id', 'area_id', 'business_id', 'display_status', 'brand_id', 'group_id', 'pv', 'recommend', 'preferred'], 'integer'],
            [['place_desc'], 'string'],
            [['tax_rate'], 'number'],
            [['create_time', 'update_time'], 'safe'],
            [['new_serial_number', 'place_name', 'contacter_name'], 'string', 'max' => 50],
            [['new_place_type', 'feature'], 'string', 'max' => 100],
            [['address', 'name_search_key_words', 'metro_station', 'metro_line'], 'string', 'max' => 200],
            [['postcode', 'contacter_phone', 'fax_number', 'geohash'], 'string', 'max' => 20],
            [['found_time', 'last_repair_time'], 'string', 'max' => 4],
            [['homepage'], 'string', 'max' => 120],
            [['name_pinyin_search_key_words'], 'string', 'max' => 300],
            [['location'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'place_id' => '场地ID',
            'new_serial_number' => '场地编码',
            'place_name' => '地点',
            'new_place_type' => '场地类型',
            'star_rate' => '星级',
            'province_id' => 'Province ID',
            'city_id' => 'City ID',
            'area_id' => 'Area ID',
            'business_id' => 'Business ID',
            'address' => 'Address',
            'postcode' => 'Postcode',
            'place_desc' => 'Place Desc',
            'found_time' => 'Found Time',
            'tax_rate' => 'Tax Rate',
            'last_repair_time' => 'Last Repair Time',
            'contacter_name' => 'Contacter Name',
            'contacter_phone' => 'Contacter Phone',
            'fax_number' => 'Fax Number',
            'homepage' => 'Homepage',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'display_status' => 'Display Status',
            'name_search_key_words' => 'Name Search Key Words',
            'name_pinyin_search_key_words' => 'Name Pinyin Search Key Words',
            'metro_station' => 'Metro Station',
            'metro_line' => 'Metro Line',
            'location' => 'Location',
            'brand_id' => 'Brand ID',
            'group_id' => 'Group ID',
            'feature' => 'Feature',
            'pv' => 'Pv',
            'recommend' => 'Recommend',
            'preferred' => 'Preferred',
            'geohash' => 'Geohash',
        ];
    }
}
