<?php

namespace app\Behavioral\FactoryMethod\RealUse\Abstraction;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}
