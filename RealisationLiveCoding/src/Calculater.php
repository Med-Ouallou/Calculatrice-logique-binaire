<?php

    namespace App;
    use Exception;

    class Calculater{

        public function sumTownumber(int $a, int $b): int {
            if($a > 10 || $b > 10){
                throw new Exception("one of the number is greater than 10");
            }
            return $a + $b;
        }
    }
?>