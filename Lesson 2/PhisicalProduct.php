<?php
/**
 * Created by PhpStorm.
 * User: vsevolodmarkov
 * Date: 18/11/2018
 * Time: 16:47
 */

require_once 'BaseProduct.php';

class PhisicalProduct extends BaseProduct
{
    public function profit_count($quantity)
    {
        parent::$profit = parent::$profit + $quantity * $this->price;
    }
}