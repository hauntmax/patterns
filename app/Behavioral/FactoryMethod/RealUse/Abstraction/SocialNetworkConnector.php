<?php

namespace app\Behavioral\FactoryMethod\RealUse\Abstraction;

interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost(string $content): void;
}
