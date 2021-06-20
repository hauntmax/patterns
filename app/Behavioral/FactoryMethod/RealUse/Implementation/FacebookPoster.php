<?php

namespace app\Behavioral\FactoryMethod\RealUse\Implementation;

use app\Behavioral\FactoryMethod\RealUse\Abstraction\SocialNetworkPoster;
use app\Behavioral\FactoryMethod\RealUse\Abstraction\SocialNetworkConnector;
use app\Behavioral\FactoryMethod\RealUse\Implementation\FacebookConnector;

class FacebookPoster extends SocialNetworkPoster
{
    private string $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
