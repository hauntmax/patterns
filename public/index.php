<?php

/**
 * Factory method conceptual
 */
echo "<b>Factory Method Conceptual</b>" . "<br>";
use app\Behavioral\FactoryMethod\Conceptual\Client as ConceptualClientFactoryMethod;
use app\Behavioral\FactoryMethod\Conceptual\Implementation\ConcreteCreator1;
use app\Behavioral\FactoryMethod\Conceptual\Implementation\ConcreteCreator2;

(new ConceptualClientFactoryMethod(new ConcreteCreator1()))->clientCode();
(new ConceptualClientFactoryMethod(new ConcreteCreator2()))->clientCode();
echo "<hr>";

/**
 * Factory method real use
 */
echo "<b>Factory Method Real Use</b>" . "<br>";;
use app\Behavioral\FactoryMethod\RealUse\Client as RealUseClientFactoryMethod;
use app\Behavioral\FactoryMethod\RealUse\Implementation\FacebookPoster;
use app\Behavioral\FactoryMethod\RealUse\Implementation\LinkedInPoster;

(new RealUseClientFactoryMethod(new FacebookPoster("mask", "12345")))->clientCode("Hello World ! This is my first Facebook poster");
(new RealUseClientFactoryMethod(new LinkedInPoster("maksim_kashkin@mail.ru", "12356")))->clientCode("Hello World ! This is my first LinkedIn poster");
echo "<hr>";

/**
 * Abstract factory conceptual
 */
echo "<b>Abstract Factory Conceptual</b>" . "<br>";
use app\Behavioral\AbstractFactory\Conceptual\Client as ConceptualClientAbstractFactory;
use app\Behavioral\AbstractFactory\Conceptual\Implementation\ConcreteFactory1;
use app\Behavioral\AbstractFactory\Conceptual\Implementation\ConcreteFactory2;

(new ConceptualClientAbstractFactory(new ConcreteFactory1()))->clientCode();
(new ConceptualClientAbstractFactory(new ConcreteFactory2()))->clientCode();
echo "<hr>";

/**
 * Abstract factory real use
 */
echo "<b>Abstract Factory Real Use</b>" . "<br>";
use app\Behavioral\AbstractFactory\RealUse\Client as RealUseClientAbstractFactory;
use app\Behavioral\AbstractFactory\RealUse\Implementation\PHPTemplateFactory;
use app\Behavioral\AbstractFactory\RealUse\Implementation\TwigTemplateFactory;
use app\Behavioral\AbstractFactory\RealUse\Page;

(new RealUseClientAbstractFactory((new PHPTemplateFactory()), (new Page("This is title for php template", "This is content for php template"))))->clientCode();
(new RealUseClientAbstractFactory((new TwigTemplateFactory()), (new Page("This is title for twig template", "This is content"))))->clientCode();
echo "<hr>";
