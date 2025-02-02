<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qaoVO5q' shared service.

return $this->privates['.service_locator.qaoVO5q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repo' => ['privates', 'App\\Repository\\GenreRepository', 'getGenreRepositoryService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService.php', true],
], [
    'repo' => 'App\\Repository\\GenreRepository',
    'serializer' => '?',
]);
