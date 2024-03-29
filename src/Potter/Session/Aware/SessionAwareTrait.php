<?php

declare(strict_types=1);

namespace Potter\Session\Aware;

use \Potter\{
    Container\ContainerInterface,
    Session\SessionInterface
};

trait SessionAwareTrait 
{
    final public function getSession(): SessionInterface
    {
        return $this->getContainer()->get('session');
    }
    
    abstract public function getContainer(): ContainerInterface;
}