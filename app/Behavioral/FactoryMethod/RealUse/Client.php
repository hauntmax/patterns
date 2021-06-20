<?php

namespace  app\Behavioral\FactoryMethod\RealUse;

use app\Behavioral\FactoryMethod\RealUse\Abstraction\SocialNetworkPoster;

class Client
{
    private SocialNetworkPoster $poster;

    public function __construct(SocialNetworkPoster $poster)
    {
        $this->poster = $poster;
    }

    public function clientCode($content)
    {
        $this->poster->post($content);
    }
}
