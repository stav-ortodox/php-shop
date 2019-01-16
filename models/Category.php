<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 016 16.01.19
 * Time: 6:33
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord {

    public static function tableName()
    {
        return 'category';
    }

    public function getCategories() {
        return Category::find()->asArray()->all();
    }


}