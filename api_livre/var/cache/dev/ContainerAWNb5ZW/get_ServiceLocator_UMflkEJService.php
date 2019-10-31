<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.uMflkEJ' shared service.

return $this->privates['.service_locator.uMflkEJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'genre' => ['privates', '.errored..service_locator.uMflkEJ.App\\Entity\\Genre', NULL, 'Cannot autowire service ".service_locator.uMflkEJ": it references class "App\\Entity\\Genre" but no such service exists.'],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'serializer' => ['services', 'serializer', 'getSerializerService.php', true],
    'validate' => ['services', 'validator', 'getValidatorService', false],
], [
    'genre' => 'App\\Entity\\Genre',
    'manager' => '?',
    'serializer' => '?',
    'validate' => '?',
]);
