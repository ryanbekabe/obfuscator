<?php function MyStrings($offset)
{
    $strings = array(0 => 'VmFyaWFibGUx', 1 => 'ICsr', 2 => 'JHZhcmlhYmxlMSArKw==', 3 => 'Lg==', 4 => 'Cg==', 5 => 'IGFuZCA=', 6 => 'Cg==', 7 => 'dmFyMQ==', 8 => 'dmFyMg==', 9 => 'dmFyMw==', 10 => 'Ww==', 11 => 'XSA9PiB7', 12 => 'fQo=', 13 => 'RnVuY3Rpb24xCg==', 14 => 'Cg==', 15 => 'QSBjcmVhdGVkCg==', 16 => 'SXQgaXMgbWV0aG9kMSBmcm9tIGNsYXNzIEEK', 17 => 'SXQgaXMgbWV0aG9kMSBmcm9tIGNsYXNzIEIK', 18 => 'Cg==', 19 => 'cGFyZW50X2FnZQ==', 20 => 'RG9uJ3Qga25vdyE=', 21 => 'QSBjb3VudDog', 22 => 'Cg==', 23 => 'QSBBZ2U6IA==', 24 => 'Cg==', 25 => 'QSBhbmQgQiBjb3VudDog', 26 => 'Cg==', 27 => 'QyBBZ2U6IA==', 28 => 'Cg==', 29 => 'QyBwYXJlbnQgYWdlOiA=', 30 => 'Cg==', 31 => 'QiBtZXRob2QgZnJvbSBDOiA=', 32 => 'Cg==', 33 => 'QiBnZXQgcGFyZW50IGFnZTog', 34 => 'Cg==', 35 => 'VGVzdCBTdHJpbmc=', 36 => 'VGhpcwlpcyB0ZXh0Cg==', 37 => 'IEFORCA=', 38 => 'ICAgIEhlcmVkb2MgdGV4dAogICAg', 39 => 'ICAgIE5vd2RvYyB0ZXh0CiAgICAkc3RyaW5nMQ==', 40 => 'RW5jb2RlZCBzdHJpbmc=', 41 => 'VGVzdA==', 42 => 'IGNvbmNhdA==', 43 => 'ISEhIQ==', 44 => 'ISEhIQ==', 45 => 'Cg==', 46 => 'dGV4dA==', 47 => '', 48 => 'ZmllbGQx', 49 => 'ZmllbGQy', 50 => 'Cg==', 51 => 'Cg==', 52 => 'aW5jbHVkZXMucGhw', 53 => 'Cg==', 54 => 'bG9s', 55 => 'c3RhdGlj', 56 => 'VGVzdCM=', 57 => 'OiA=', 58 => 'VGhlVGVzdDo6bWV0aG9kMgo=', 59 => 'SW5jcmVtZW50IG9uY2U=', 60 => 'SW5jcmVtZW50IHR3aWNl', 61 => 'TWVzc2FnZQ==', 62 => 'U3RyaW5n', 63 => 'U3RyaW5nMg==', 64 => 'TWVzc2FnZQ==', 65 => 'aW5jbHVkZXMucGhw', 66 => 'bG9s', 67 => 'ClRlc3Qj', 68 => 'OiA=', 69 => 'Cg==', 70 => 'VGhlVGVzdDo6bWV0aG9kMgo=', 71 => 'VGhpcyBzaG91bGQgYnJva2UgdGVzdAo=', 72 => 'Cg==', 73 => 'TWVzc2FnZQ==', 74 => 'TWVzc2FnZQ==', 75 => 'QSBtZXRob2Q6');
    return isset($strings[$offset]) ? base64_decode($strings[$offset]) : '';
}
/**
 * Test for global methods replacement
 */
require_once MyStrings(65);
class TheTest
{
    public $_5 = 'lol';
    public static function _9($_0 = 'some text3')
    {
        global $globalVar;
        global $globalObj;
        $globalObj->field1 .= MyStrings(67) . $globalVar . MyStrings(68) . $_0;
        echo $globalObj->field1 . MyStrings(69);
    }
    public static function _10()
    {
        echo MyStrings(70);
    }
    public function _8()
    {
        echo MyStrings(71);
    }
}
echo $globalObj->field1 . MyStrings(72);
$_1 = new TheTest();
TheTest::_9(MyStrings(73));
TheTest::_10(MyStrings(74));
A::method2();
$_2 = new A();
$_2->method1(MyStrings(75));
$_1->_8();
$_3 = $_1;
$_3->method1();