<?php

declare(strict_types=1);

namespace Jascha030\Project\Environment;

interface EnvironmentInterface
{
    public function getProjectName(): string;

    public function getProjectRoot(): string;

    public function getWordPressRoot(): string;

    public function getDatabaseConfig();

    public function getSSHConfig();
}
