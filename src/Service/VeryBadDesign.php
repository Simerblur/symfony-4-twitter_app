<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 24.05.18
 * Time: 10:46
 */

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class VeryBadDesign implements ContainerAwareInterface
{
    /**
     * @required
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $container->get('app.greeting');
    }

}