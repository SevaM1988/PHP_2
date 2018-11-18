<?php
/**
 * Created by PhpStorm.
 * User: vsevolodmarkov
 * Date: 18/11/2018
 * Time: 16:46
 */

require_once 'BaseProduct.php';

class DigitalProduct extends BaseProduct
{
    public function profit_count($quantity)
    {
        parent::$profit = parent::$profit + $quantity * $this->price * 0.5;
    }
}