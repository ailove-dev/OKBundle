<?php

namespace Ailove\OKBundle\DependencyInjection\Security\Factory;

use Ailove\AbstractSocialBundle\Classes\AbstractFactory;

class OKFactory extends AbstractFactory
{
    /**
     * @{inheritDoc}
     */
    function getServicePrefix()
    {
        return 'ok';
    }
}
