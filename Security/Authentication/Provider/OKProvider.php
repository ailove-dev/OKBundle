<?php

namespace Ailove\OKBundle\Security\Authentication\Provider;

use Ailove\AbstractSocialBundle\Classes\AbstractAuthenticationProvider;
use Ailove\OKBundle\Security\Authentication\Token\OKUserToken as Token;

/**
 * Odnoklassniki authentication provider.
 */
class OKProvider extends AbstractAuthenticationProvider
{
    /**
     * @{inheritDoc}
     */
    protected function getTokenClass()
    {
        return get_class(new Token());
    }

    /**
     * @{inheritDoc}
     */
    protected function getDefaultSocialRoles()
    {
        return array('ROLE_OK_USER');
    }
}
