<?php 
    namespace App;


    class ConvertNumber implements ConverterInterface{
    use FormatterTrait;

    private $number;

    public function __construct(int $number){
        $this->number = $number;
    }

    public function toDecimal(): int{
        return $this->number;
    }

    public function toBinary(): string{
        return decbin($this->number);
    }
    
    public function toHexa(): string{
        return strtoupper(dechex($this->number));
    }

}

?>