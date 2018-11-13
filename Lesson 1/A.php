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
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

// Результатом будет "1122", после выполнения 19 и 20 строу переменные будут равны 1, следовательно при $х=1 переменные равны 2