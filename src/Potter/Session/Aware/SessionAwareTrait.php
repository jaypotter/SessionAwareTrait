<?php

declare(strict_types=1);

namespace Potter\Session\Aware;

use \Psr\Container\ContainerInterface, \Potter\Session\SessionInterface;

trait SessionAwareTrait 
{
    final public function getSession(): SessionInterface
    {
        return $this->getContainer()->get('session');
    }
    
    final public function hasSession(): bool
    {
        return $this->getContainer()->has('session');
    }
    
    final public function startSession(): void
    {
        $session = $this->getSession();
        if ($session->isActive()) {
            return;
        }
        $session->activate();
    }
    
    abstract public function getContainer(): ContainerInterface;
}