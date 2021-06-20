<?php

namespace app\Behavioral\FactoryMethod\RealUse\Implementation;

use app\Behavioral\FactoryMethod\RealUse\Abstraction\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    private string $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password<br>";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login<br>";
    }

    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.<br>" . "Content: " . $content . "<br>";
    }
}
