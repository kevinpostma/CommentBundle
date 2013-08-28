<?php

namespace Kp\Bundle\CommentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sylius\Bundle\ResourceBundle\DependencyInjection\Compiler\ResolveDoctrineTargetEntitiesPass;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

class KpCommentBundle extends Bundle
{
    public static function getSupportedDrivers()
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }

    public function build(ContainerBuilder $container)
    {
        $interfaces = array(
            'Kp\Bundle\CommentBundle\Model\CommentInterface'         => 'kp.model.comment.class',
        );

        $container->addCompilerPass(new ResolveDoctrineTargetEntitiesPass('kp_comment', $interfaces));
    }
}
