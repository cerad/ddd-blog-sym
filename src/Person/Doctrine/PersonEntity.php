<?php declare(strict_types=1);

namespace App\Person\Doctrine;

use App\Person\Model\Person;

class PersonEntity
{
    public string $id;
    public string $first_name;
    public string $last_name;

    public function __construct(Person $person)
    {
        $this->id = (string)$person->id->id;
        $this->first_name = $person->name->first;
        $this->last_name  = $person->name->last;
    }
}