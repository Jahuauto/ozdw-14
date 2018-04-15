<?php

namespace Zplex;


class App
{
    private $config;

    public function __construct()
    {
        $this->loadConfig();
    }

    private function loadConfig()
    {
        $this->config = include(__DIR__ . '/../config.php');

    }
}