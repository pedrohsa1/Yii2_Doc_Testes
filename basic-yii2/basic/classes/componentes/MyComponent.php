<?php
/**
 * Created by PhpStorm.
 * User: PedroHSA
 * Date: 26/08/2018
 * Time: 21:28
 */

namespace app\classes\componentes;


use yii\base\Component;

class MyComponent extends Component
{
    public $string;

    public function printString()
    {
        echo $this->string;
    }
}