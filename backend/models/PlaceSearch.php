<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PcPlaceMainInfo;

/**
 * PlaceSearch represents the model behind the search form about `app\models\PcPlaceMainInfo`.
 */
class PlaceSearch extends PcPlaceMainInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place_id', 'star_rate', 'province_id', 'city_id', 'area_id', 'business_id', 'display_status', 'brand_id', 'group_id', 'pv', 'recommend', 'preferred'], 'integer'],
            [['new_serial_number', 'place_name', 'new_place_type', 'address', 'postcode', 'place_desc', 'found_time', 'last_repair_time', 'contacter_name', 'contacter_phone', 'fax_number', 'homepage', 'create_time', 'update_time', 'name_search_key_words', 'name_pinyin_search_key_words', 'metro_station', 'metro_line', 'location', 'feature', 'geohash'], 'safe'],
            [['tax_rate'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PcPlaceMainInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'place_id' => $this->place_id,
            'star_rate' => $this->star_rate,
            'province_id' => $this->province_id,
            'city_id' => $this->city_id,
            'area_id' => $this->area_id,
            'business_id' => $this->business_id,
            'tax_rate' => $this->tax_rate,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'display_status' => $this->display_status,
            'brand_id' => $this->brand_id,
            'group_id' => $this->group_id,
            'pv' => $this->pv,
            'recommend' => $this->recommend,
            'preferred' => $this->preferred,
        ]);

        $query->andFilterWhere(['like', 'new_serial_number', $this->new_serial_number])
            ->andFilterWhere(['like', 'place_name', $this->place_name])
            ->andFilterWhere(['like', 'new_place_type', $this->new_place_type])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'place_desc', $this->place_desc])
            ->andFilterWhere(['like', 'found_time', $this->found_time])
            ->andFilterWhere(['like', 'last_repair_time', $this->last_repair_time])
            ->andFilterWhere(['like', 'contacter_name', $this->contacter_name])
            ->andFilterWhere(['like', 'contacter_phone', $this->contacter_phone])
            ->andFilterWhere(['like', 'fax_number', $this->fax_number])
            ->andFilterWhere(['like', 'homepage', $this->homepage])
            ->andFilterWhere(['like', 'name_search_key_words', $this->name_search_key_words])
            ->andFilterWhere(['like', 'name_pinyin_search_key_words', $this->name_pinyin_search_key_words])
            ->andFilterWhere(['like', 'metro_station', $this->metro_station])
            ->andFilterWhere(['like', 'metro_line', $this->metro_line])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'feature', $this->feature])
            ->andFilterWhere(['like', 'geohash', $this->geohash]);

        return $dataProvider;
    }
}
