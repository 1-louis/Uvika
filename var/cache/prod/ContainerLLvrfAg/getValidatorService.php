<?php

namespace ContainerLLvrfAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['validator'] = ($container->privates['validator.builder'] ?? $container->load('getValidator_BuilderService'))->getValidator();
    }
}
