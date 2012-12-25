<?php

namespace Ailove\OKBundle\Security\Firewall;

use Ailove\AbstractSocialBundle\Classes\AbstractEntryPoint;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Ailove\OKBundle\Security\Authentication\Token\OKUserToken;

class OKEntryPoint extends AbstractEntryPoint
{
    /**
     * {@inheritDoc}
     */
    protected function getSessionProxy()
    {
        return $this->container->get('ok.oauth.proxy');
    }

    /**
     * {@inheritDoc}
     */
    protected function supportsToken(TokenInterface $token)
    {
        if ($token instanceof OKUserToken)
            return true;

        return false;
    }

}
