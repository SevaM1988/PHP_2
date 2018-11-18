<?php
/**
 * Created by PhpStorm.
 * User: vsevolodmarkov
 * Date: 18/11/2018
 * Time: 16:47
 */

require_once 'BaseProduct.php';

class WeightProduct extends BaseProduct
{
    public function get_weight_price($weight)
    {
        if ($weight < 5)    {
            return $this->price;
        }elseif ($weight >= 5 && $weight <= 10)   {
            return $this->price * 0.7;
        }else   {
            return $this->price * 0.5;
        }
    }

    public function profit_count($weight)
    {
        Parent::$profit = parent::$profit + $weight * $this->get_weight_price($weight);
    }
}