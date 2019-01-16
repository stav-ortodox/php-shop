<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 016 16.01.19
 * Time: 10:48
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\Good;

class GoodController extends Controller
{
    public function actionIndex($name) {
        $good = new Good();
        $good = $good->getOneGood($name);
        return $this->render('index', compact('good'));
    }
}