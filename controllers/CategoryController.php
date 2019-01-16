<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 016 16.01.19
 * Time: 5:47
 */

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id) {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        return $this->render('view', compact('goods'));
    }

    public function actionSearch() {
        $search = Yii::$app->request->get('search');
        $search = \yii\helpers\Html::encode($search);
        $goods = new Good();
        $goods = $goods->getSearchResults($search);
        return $this->render('search', compact('goods', 'search'));
    }
}