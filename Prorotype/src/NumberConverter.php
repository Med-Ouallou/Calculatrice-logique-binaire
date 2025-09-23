<?php

namespace App;

class NumberConverter implements ConverterInterface{
    
    use FormatterTrait;

    private int $number;
    
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

    public function ANDopr(int $other): int{
        return $this->number & $other;
    }

    public function ORopr(int $other): int{
        return $this->number | $other;
    }

    public function XORopr(int $other): int{
        return $this->number ^ $other;
    }

    public function NOTopr(): int{
        return ~$this->number;
    }

    public function ShiftLeft(int $postions): int{
        return $this->number << $positions;
    }

    public function ShiftRight(int $postions): int{
        return $this->number >> $positions;
    }
}