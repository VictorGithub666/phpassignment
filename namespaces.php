<?php

namespace NewCalc\Circle;

require 'static.php';

class CircleActivities {

    public static $pie = 3.14;
    public static $radii = 42.67;

    public static function circumFerence() {
        $circ = 2 * self::$radii * self::$pie;  // Calculate circumference using static properties
        echo "The Circumference is " . $circ . " mm" . "<br>";
    }

    public static function AreaCircle(){

        $areaC = self::$pie * self::$radii * self::$radii;
        echo "The Area of a Golf Ball is " . $areaC . " ㎟";
        
    }
}

CircleActivities::circumFerence();
CircleActivities::areaCircle();