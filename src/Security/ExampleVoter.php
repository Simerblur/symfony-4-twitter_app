<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 24.05.18
 * Time: 10:41
 */

namespace App\Security;


use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class ExampleVoter implements VoterInterface
{
    public function vote(TokenInterface $token, $subject, array $attributes)
    {
        // TODO: Implement vote() method.
    }

}