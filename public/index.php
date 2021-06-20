<?php

/**
 * Factory method conceptual
 */
use app\Behavioral\FactoryMethod\Conceptual\Client as ConceptualClientFactoryMethod;
use app\Behavioral\FactoryMethod\Conceptual\Implementation\ConcreteCreator1;
use app\Behavioral\FactoryMethod\Conceptual\Implementation\ConcreteCreator2;

(new ConceptualClientFactoryMethod(new ConcreteCreator1()))->clientCode();
(new ConceptualClientFactoryMethod(new ConcreteCreator2()))->clientCode();

echo "<br>";
/**
 * Factory method real use
 */
use app\Behavioral\FactoryMethod\RealUse\Client as RealUseClientFactoryMethod;
use app\Behavioral\FactoryMethod\RealUse\Implementation\FacebookPoster;
use app\Behavioral\FactoryMethod\RealUse\Implementation\LinkedInPoster;

(new RealUseClientFactoryMethod(new FacebookPoster("mask", "12345")))->clientCode("Hello World ! This is my first Facebook poster");
(new RealUseClientFactoryMethod(new LinkedInPoster("maksim_kashkin@mail.ru", "12356")))->clientCode("Hello World ! This is my first LinkedIn poster");
