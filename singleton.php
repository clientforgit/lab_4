<?php
class MathFunctions {
    private static $instance;
    private static $coefArray;
    private static $powerArray;

    private function __construct() {
    }

    public static function getInstance($coefArray, $powerArray) {
        self::$coefArray = $coefArray;
        self::$powerArray = $powerArray;
        if (!self::$instance) {
            self::$instance = new MathFunctions();
        }
        return self::$instance;
    }

    public function getY($x) {
        $result = 0;
        for ($i = 0; $i <= count(self::$coefArray); $i++) {
            $result += self::$coefArray[$i]*pow($x, self::$powerArray[$i]);
        }
        return $result;
    }
}

$math = MathFunctions::getInstance([1, 2], [0, 1]);

echo $math->getY(3);
echo "<br>";