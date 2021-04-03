<?php

namespace Container1Y42S3X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\FactsCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\FactsCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\FactsCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\FactsCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\FactsCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\FactsCrudController::createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController::createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\FactsCrudController::createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController::createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\FactsCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\FactsCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\FactsCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\FactsCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\FactsCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\FactsCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\FactsCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\FactsCrudController:createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController:createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\FactsCrudController:createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController:createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\FactsCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\FactsCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\FactsCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\FactsCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\FactsCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\FactsCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\FactsCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\FactsCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\FactsCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\FactsCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FactsCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\FactsCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FactsCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FactsCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\FactsCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FactsCrudController::delete' => '?',
            'App\\Controller\\Admin\\FactsCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\FactsCrudController::detail' => '?',
            'App\\Controller\\Admin\\FactsCrudController::edit' => '?',
            'App\\Controller\\Admin\\FactsCrudController::index' => '?',
            'App\\Controller\\Admin\\FactsCrudController::new' => '?',
            'App\\Controller\\Admin\\FactsCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\FactsCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\FactsCrudController::updateEntity' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\FactsCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\FactsCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\FactsCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\FactsCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\FactsCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\FactsCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FactsCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\FactsCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FactsCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FactsCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\FactsCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FactsCrudController:delete' => '?',
            'App\\Controller\\Admin\\FactsCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\FactsCrudController:detail' => '?',
            'App\\Controller\\Admin\\FactsCrudController:edit' => '?',
            'App\\Controller\\Admin\\FactsCrudController:index' => '?',
            'App\\Controller\\Admin\\FactsCrudController:new' => '?',
            'App\\Controller\\Admin\\FactsCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\FactsCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\FactsCrudController:updateEntity' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}