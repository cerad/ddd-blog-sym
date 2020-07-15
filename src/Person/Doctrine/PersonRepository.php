<?php declare(strict_types=1);

namespace App\Person\Doctrine;

use App\Person\Model\Person;
use App\Person\Model\PersonAddress;
use App\Person\Model\PersonId;
use App\Person\Model\PersonName;
use App\Person\Model\PersonRepositoryInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Uid\Uuid;

class PersonRepository extends EntityRepository implements PersonRepositoryInterface
{
    public function persist($entity): void
    {
        $this->_em->persist($entity);
    }
    public function flush(): void
    {
        $this->_em->flush();
    }
    public function findOne(PersonId $id): Person
    {
        /** @var PersonEntity $personDoctrine */
        $personDoctrine = parent::find((string)$id->id);
        $id = new PersonId(Uuid::fromString($personDoctrine->id));
        $name = new PersonName($personDoctrine->first_name,$personDoctrine->last_name);
        $address = new PersonAddress();

        return new Person($id,$name,$address);
    }
}