<?php declare(strict_types=1);

// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Core\Action\ActionInterface;
use App\Person\Command\PersonTestCommand;

return function(ContainerConfigurator $configurator)
{
    $services = $configurator->services()->defaults()
        ->autowire()
        ->autoconfigure()
    ;
    $services->instanceof(ActionInterface::class)
        ->tag('controller.service_arguments');

    // Home
    $services->load('App\\Home\\', '../src/Home/*')
        ->exclude('../src/Home/{}');

    // Blog
    $files = implode(',',[
        'Model/BlogEntity.php',
        'Model/BlogId.php',
    ]);
    $services->load('App\\Blog\\', '../src/Blog/*')
        ->exclude("../src/Blog/{{$files}}");

    $services->set(PersonTestCommand::class);
};
