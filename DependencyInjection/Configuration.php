<?php

namespace Ailove\OKBundle\DependencyInjection;

use Ailove\AbstractSocialBundle\Classes\AbstractConfiguration;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration extends AbstractConfiguration
{

    /**
     * @return string id of the root tree
     */
    protected function getTreeName()
    {
        return 'ok';
    }


}
