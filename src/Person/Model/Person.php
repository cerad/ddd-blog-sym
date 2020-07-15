<?php declare(strict_types=1);

namespace App\Person\Model;

class Person
{
    public PersonId      $id;
    public PersonName    $name;
    public PersonAddress $address;

    public function __construct(?PersonId $id, PersonName $name, PersonAddress $address)
    {
        $this->id = $id ? $id : new PersonId();
        $this->name    = $name;
        $this->address = $address;
    }
}