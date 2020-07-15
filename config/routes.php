<?php declare(strict_types=1);

// config/routes.php

use App\Home\Index\HomeIndexAction;

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

    $routes->add('home_index', "/")
        ->controller(HomeIndexAction::class)
    ;
    $blogRoutes = $routes->collection('blog_')->prefix('blog');
    $blogRoutes->add('edit','/edit')->controller(HomeIndexAction::class);
    $blogRoutes->add('list','/list')->controller(HomeIndexAction::class);

    /*
    $shoePrefix = 'shoe';
    $routes->add('shoe_list', "/$shoePrefix/list")
        ->controller(ShoeListAction::class)
    ;
    $routes->add('shoe_edit', "/$shoePrefix/edit/{shoeCode}")
        ->controller([ShoeEditAction::class])
    ;
    $shoeStorePrefix = 'shoe-store';
    $routes->add('shoe-store_list', "/$shoeStorePrefix/list/{storeCode}")
        ->controller(ShoeStoreListAction::class)
        ->defaults(['storeCode' => 'ALL'])
    ;
    */
};