<?php declare(strict_types=1);

namespace App\Person\Model;

use Symfony\Component\Uid\Uuid;

class PersonId
{
    public Uuid $id;

    /** @noinspection PhpFieldAssignmentTypeMismatchInspection */
    public function __construct(Uuid $id = null)
    {
        $id = $id ?:  Uuid::v4();
        $this->id = $id;
    }
}