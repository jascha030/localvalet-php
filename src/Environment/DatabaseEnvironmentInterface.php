<?php

declare(strict_types=1);

namespace Jascha030\Project\Environment;

interface DatabaseEnvironmentInterface
{
    public function getHost(): string;

    public function getUser(): string;

    public function getPassword(): string;

    public function getDatabase(): string;
}
