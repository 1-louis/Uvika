<?php

namespace ContainerLLvrfAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangePasswordTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ChangePasswordType' shared autowired service.
     *
     * @return \App\Form\ChangePasswordType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ChangePasswordType'] = new \App\Form\ChangePasswordType();
    }
}
