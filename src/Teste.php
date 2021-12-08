<?php

declare(strict_types=1);

namespace App;

class Teste
{
    public mixed $type;
     
    public function stringNumber($type = 'int'): string|int
    {
        if ($type != 'int') {
            return 'string';
        }

        return 10;
    }
    
    public function soma(int $a, int $b, int $c): int
    {
        return $a + $b + $c;
    }
}