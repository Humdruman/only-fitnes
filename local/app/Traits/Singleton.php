<?php

namespace App\Traits;

trait Singleton
{
    private static self $instance;

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}