<?php declare(strict_types=1);

namespace App\Person\Model;

class PersonName
{
    public string $first;
    public string $last;

    public function __construct(string $first = '', string $last = '')
    {
        $this->first = $first;
        $this->last  = $last;
    }
}