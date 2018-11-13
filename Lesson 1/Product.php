<?php
/**
 * Created by PhpStorm.
 * User: vsevolodmarkov
 * Date: 13/11/2018
 * Time: 18:44
 */

class Product
{
    public $price; // Цена товара
    public $size; // Размер товара
    public $color; // Цвет товара
    public $material; // Материал товара

    /**
     * Product constructor. Добавляет данные товара
     * @param $price integer
     * @param $size integer
     * @param $color string
     * @param $material string
     */
    public function __construct($price, $size, $color, $material)
    {
        $this->price = $price;
        $this->size = $size;
        $this->color = $color;
        $this->material = $material;
    }

    /**
     * Изменяет цену товара
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * Изменяет размер товара
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * Изменяет цвет товара
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * Изменяет материал товара
     * @param mixed $material
     */
    public function setMaterial($material): void
    {
        $this->material = $material;
    }

    public function view () {
        $a = 'Product price - '.$this->price;
        $b = 'Product size - '.$this->size;
        $c = 'Product color - '.$this->color;
        $d = 'Product material - '.$this->material;

        echo "$a<br>$b<br>$c<br>$d<br>";
    }
}