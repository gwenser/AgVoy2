<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.BkOHXLl' shared service.

return $this->privates['.service_locator.BkOHXLl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'room' => ['privates', '.errored..service_locator.BkOHXLl.App\\Entity\\Room', NULL, 'Cannot autowire service ".service_locator.BkOHXLl": it references class "App\\Entity\\Room" but no such service exists.'],
], [
    'room' => 'App\\Entity\\Room',
]);
