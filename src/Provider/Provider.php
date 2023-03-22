<?php

declare(strict_types=1);

namespace Jascha030\LocalValet\Provider;

use Closure;
use Jascha030\DI\ServiceProvider\ServiceProviderInterface;

abstract class Provider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     *
     * @return iterable<string|class-string,Closure|callable>
     */
     abstract public function getFactories(): iterable;

    /**
     * {@inheritDoc}
     *
     * @return array<string|class-string,Closure|callable>
     */
     public function getExtensions(): iterable
     {
         return [];
     }
 }
