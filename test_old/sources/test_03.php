<?php
/**
 * Test for class names and methods replacement
 */
class A {
    public $age = 60;
    public static $count = 0;
    
    private static $_z = 6;

    public function __construct() {
        echo "A created\n";
        self::$count++;
    }

    public function method1() {
        echo "It is method1 from class A(" . self::$_z . ")\n";
    }

    public function __destruct() {
        self::$count--;
    }
}

class B extends A {
    public function method1() {        
        echo "It is method1 from class B\n";
    }

    public function method2() {
        return self::$count;
    }
}

class C extends B {
    public $age = 16;

    public function method2() {
        return parent::method2() + 1;
    }

    public static function echoCount() {
        echo self::$count . "\n";
    }

    public function __get($name) {
        if ($name == 'parent_age') {
            return "Don't know!";
        }
        return null;
    }
}

$a = new A;
$b = new B;
$c = new C;

echo "A count: " . A::$count . "\n";
$a->method1();
$a->age = 167;
$a->age = 166+1;
echo "A Age: {$a->age}\n";
$b->method1();
echo "A and B count: {$b->method2()}\n";
echo "C Age: {$c->age}\n";
echo "C parent age: {$c->parent_age}\n";
echo "B method from C: {$c->method1()}\n";
echo "B get parent age: {$b->age}\n";
echo "B count: " . B::$count . "\n";
echo "C method2: {$c->method2()}\n";
C::echoCount();
$__call = 5;
echo "Test = $__call\n";

