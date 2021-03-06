<?php

namespace Zplex\Providers;


abstract class ServiceProvider
{
    protected $config;
    public function __construct(array $config)
    {
        $this->config = $config;
    }
    abstract public function provide();
}