<?php declare(strict_types=1);

namespace App\Person\Model;

interface PersonRepositoryInterface
{
    // Or maybe save and save with flush?
    public function persist($entity) : void;
    public function flush () : void;

    public function findOne(PersonId $id) : Person;
}