<?php
    namespace App;

    //* clean up the input  
    trait FormatterTrait{
        public function format(string $lable, string|int $value){
            return str_pad($lable,8," ",STR_PAD_RIGHT) . ":" .$value . PHP_EOL;
        }
    }
?>