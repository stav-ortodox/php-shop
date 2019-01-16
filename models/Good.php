<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 016 16.01.19
 * Time: 5:53
 */

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods() {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 10);
    }
        return $goods;
    }

    public function getGoodsCategories($id) {
        $catGoods = Yii::$app->cache->get('catGoods');
        if (!$catGoods) {
            $catGoods = Good::find()->where(['category' => $id])->asArray()->all();
            Yii::$app->cache->set('catGoods', $catGoods, 10);
        }
        return $catGoods;
    }

    public function getSearchResults($search) {
        $searchResults = Good::find()->where(['like', 'name', $search])->asArray()->all();
        return $searchResults;
    }
}