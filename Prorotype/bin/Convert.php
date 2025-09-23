<?php
    require __DIR__ . '/../vendor/autoload.php';

    use App\NumberConverter;

    

    try{
        $number = $argv[1] ?? null;
        if($number == null || !is_numeric($number)){
            throw new Exception("Invalid input, please provide a valid number.");
        }
        $converter = new NumberConverter((int)$number);

        echo $converter->format("Decimal",$converter->toDecimal());
        echo $converter->format("Binary",$converter->toBinary());
        echo $converter->format("Hexa",$converter->toHexa());

    }catch(throwable $e){
        fwrite(STDERR,"Error: ". $e->getMessage() . PHP_EOL);
        exit(1);
    }

