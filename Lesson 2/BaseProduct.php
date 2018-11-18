<?php
/**
 * Created by PhpStorm.
 * User: vsevolodmarkov
 * Date: 18/11/2018
 * Time: 16:44
 */

abstract class BaseProduct
{
    public $name;
    public $price;

    protected static $profit = 0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract function profit_count($quantity);

    public function print_price () {
        echo 'Название товара: ' . $this->name . '<br>';
        echo 'Цена товара: ' . $this->price . '<br>';
        echo 'Прибыль: ' . self::$profit . '<br><br>';
    }
}
