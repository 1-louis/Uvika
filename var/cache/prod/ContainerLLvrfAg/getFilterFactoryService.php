<?php

namespace ContainerLLvrfAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilterFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\CommonConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\CommonConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\CommonConfigurator()));
            yield 1 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator()));
            yield 2 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ComparisonConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ComparisonConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ComparisonConfigurator()));
            yield 3 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\DateTimeConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\DateTimeConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\DateTimeConfigurator()));
            yield 4 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\EntityConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\EntityConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\EntityConfigurator()));
            yield 5 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NullConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NullConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NullConfigurator()));
            yield 6 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NumericConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NumericConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NumericConfigurator()));
            yield 7 => ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\TextConfigurator'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\TextConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\TextConfigurator()));
        }, 8));
    }
}
