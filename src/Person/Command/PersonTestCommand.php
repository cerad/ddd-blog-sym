<?php declare(strict_types=1);

namespace App\Person\Command;

use App\Person\Doctrine\PersonEntity;
use App\Person\Model\Person;
use App\Person\Model\PersonAddress;
use App\Person\Model\PersonName;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PersonTestCommand extends Command
{
    protected static $defaultName = 'person:test';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = new PersonName('Art','Hundiak');
        $address = new PersonAddress();
        $person = new Person(null,$name,$address);
        dump($person);

        $personDoctrine = new PersonEntity($person);
        dump($personDoctrine);

        return Command::SUCCESS;
    }
}