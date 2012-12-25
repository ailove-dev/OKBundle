<?php

namespace Ailove\OKBundle\Service;

use Symfony\Component\DependencyInjection\Container;
use Ailove\AbstractSocialBundle\Classes\AbstractSessionProxy;


class OKOauthSessionProxy extends AbstractSessionProxy
{
    /**
     * prefix to store session vars
     *
     * @return string
     */
    protected function getSessionPrefix()
    {
        return '_ok_';
    }

    /**
     * Make this method to use authorized sdk in order to fetch user's id from social network
     * @return string User's social uid
     */
    function fetchUserId()
    {
        $user = $this->sdk->api('users.getCurrentUser');
        return $user['uid'];
    }

    protected function makeAuthorizationRequest($url)
    {
        // OK requires POST method
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
            ),
        ));

        return file_get_contents($url,
            false,
            $context
        );
    }


}

