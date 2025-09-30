<?php
    require __DIR__ . '/../vendor/autoload.php';
    use App\Calculater;

    $calc = new Calculater;

    try{
        if($argc < 3){
            echo "Usage : php bin/sum.php <num1> <num2>". PHP_EOL;
        }
        $a = (int)($argv[1] ?? 0);
        $b = (int)($argv[2] ?? 0);

        echo"Resulte : " . $calc->sumTownumber($a , $b) . PHP_EOL;
    }catch(Exception $e){
        echo"Error " . $e.getMessage() . PHP_EOL;
    }
?>