<?php

namespace Ailove\OKBundle\Security\User;

use Ailove\AbstractSocialBundle\Classes\AbstractUserProvider;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Ailove\OKBundle\Classes\OKUserInterface;

class OKUserProvider extends AbstractUserProvider
{
    /**
     * Find user by social uid.
     *
     * @param string $uid user social uid
     * @return \FOS\UserBundle\Model\UserInterface
     * @throws UsernameNotFoundException
     *
     */
    public function findUserByUid($uid)
    {
        return $this->userManager->findUserBy(array('okUid' => $uid));
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUid(UserInterface $user)
    {
        if (!$user instanceof OkUserInterface)
            throw new UnsupportedUserException('User is not supported');

        return $user->getOkUid();
    }
}
