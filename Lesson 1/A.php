<?php
/**
 * Created by PhpStorm.
 * User: vsevolodmarkov
 * Date: 13/11/2018
 * Time: 20:41
 */

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();//создаем новй класс
$b1 = new B();//создаем новй класс
$a1->foo();// выполняем функцию при х=0 получаем 1 и сохраняем в переменную $a1
$b1->foo();// выполняем функцию при х=0 получаем 1 и сохраняем в переменную $b1
$a1->foo();// выполняем функцию при х=1 получаем 2 и сохраняем в переменную $a1
$b1->foo();// выполняем функцию при х=1 получаем 2 и сохраняем в переменную $b1

// Результатом будет "1122", после выполнения 19 и 20 строу переменные будут равны 1, следовательно при $х=1 переменные равны 2