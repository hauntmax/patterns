<?php

namespace app\Behavioral\FactoryMethod\RealUse\Implementation;

use app\Behavioral\FactoryMethod\RealUse\Abstraction\SocialNetworkPoster;
use app\Behavioral\FactoryMethod\RealUse\Abstraction\SocialNetworkConnector;
use app\Behavioral\FactoryMethod\RealUse\Implementation\LinkedInConnector;

class LinkedInPoster extends SocialNetworkPoster
{
    private string $email, $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
