<?php
/**
 * Created by PhpStorm.
 * User: PedroHSA
 * Date: 26/09/2018
 * Time: 22:52
 */

namespace app\controllers;

use yii\web\Controller;

class WidgetController extends Controller
{
    public function actionIndex()
    {
        return $this->render("teste-widget");
    }
}