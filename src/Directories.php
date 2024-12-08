<?php

namespace Opentech\Directories;

use Illuminate\Foundation\Application;

class Directories
{


    public function __construct()
    {
    }

    public function getWebRoutesDirectory(): ?string
    {
        return config('directories.routes.web');
    }

    public function getApiRoutesDirectory(): ?string
    {
        return config('directories.routes.api');
    }

    public function getConsoleCommandsDirectory(): ?string
    {
        return config('directories.console.commands');
    }

    public function getChannelsRoutesDirectory(): ?string
    {
        return config('directories.routes.channels');
    }

    public function getPagesRoutesDirectory(): ?string
    {
        return config('directories.routes.pages');
    }

    public function getHealthRoutePath(): string
    {
        return config('directories.routes.health') ?? '/up';
    }

    public function getApiPrefix(): string
    {
        return config('directories.api.prefix') ?? 'api';
    }

    public function getThenCallback(): ?callable
    {
        return config('directories.routes.then');
    }
}
