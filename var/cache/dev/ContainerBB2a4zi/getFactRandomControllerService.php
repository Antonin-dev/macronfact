<?php

namespace ContainerBB2a4zi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFactRandomControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FactRandomController' shared autowired service.
     *
     * @return \App\Controller\FactRandomController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FactRandomController.php';

        $container->services['App\\Controller\\FactRandomController'] = $instance = new \App\Controller\FactRandomController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\FactRandomController', $container));

        return $instance;
    }
}
