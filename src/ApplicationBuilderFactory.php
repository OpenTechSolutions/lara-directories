<?php

namespace Opentech\Directories;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Foundation\Configuration\ApplicationBuilder;
use Opentech\Directories\Console\CastMakeCommand;
use Opentech\Directories\Console\ChannelMakeCommand;
use Opentech\Directories\Console\CommandMakeCommand;
use Opentech\Directories\Console\ComponentMakeCommand;
use Opentech\Directories\Console\ControllerMakeCommand;
use Opentech\Directories\Console\EnumMakeCommand;
use Opentech\Directories\Console\EventMakeCommand;
use Opentech\Directories\Console\ExceptionMakeCommand;
use Opentech\Directories\Console\InterfaceMakeCommand;
use Opentech\Directories\Console\JobMakeCommand;
use Opentech\Directories\Console\JobMiddlewareMakeCommand;
use Opentech\Directories\Console\ListenerMakeCommand;
use Opentech\Directories\Console\MailMakeCommand;
use Opentech\Directories\Console\MiddlewareMakeCommand;
use Opentech\Directories\Console\ModelMakeCommand;
use Opentech\Directories\Console\NotificationMakeCommand;
use Opentech\Directories\Console\ObserverMakeCommand;
use Opentech\Directories\Console\PolicyMakeCommand;
use Opentech\Directories\Console\ProviderMakeCommand;
use Opentech\Directories\Console\RequestMakeCommand;
use Opentech\Directories\Console\ResourceMakeCommand;
use Opentech\Directories\Console\RuleMakeCommand;
use Opentech\Directories\Console\ScopeMakeCommand;
use Opentech\Directories\Console\TraitMakeCommand;
use Opentech\Directories\Console\ViewMakeCommand;


class ApplicationBuilderFactory
{
    public static function make(string $dir): ApplicationBuilder {

        $basePath = match (true) {
            is_string(dirname($dir)) => dirname($dir),
            default => Application::inferBasePath(),
        };

        $builder = (new ApplicationBuilder(new Application($basePath)))
            ->withKernels()
            ->withEvents()
            ->withCommands([
                CastMakeCommand::class,
                ChannelMakeCommand::class,
                CommandMakeCommand::class,
                ComponentMakeCommand::class,
                ControllerMakeCommand::class,
                EnumMakeCommand::class,
                EventMakeCommand::class,
                ExceptionMakeCommand::class,
                InterfaceMakeCommand::class,
                JobMakeCommand::class,
                JobMiddlewareMakeCommand::class,
                ListenerMakeCommand::class,
                MailMakeCommand::class,
                MiddlewareMakeCommand::class,
                ModelMakeCommand::class,
                NotificationMakeCommand::class,
                ObserverMakeCommand::class,
                PolicyMakeCommand::class,
                ProviderMakeCommand::class,
                RequestMakeCommand::class,
                RuleMakeCommand::class,
                ResourceMakeCommand::class,
                RuleMakeCommand::class,
                ScopeMakeCommand::class,
                TraitMakeCommand::class,
                ViewMakeCommand::class,
            ])
            ->withProviders()
        ;
        $app = $builder->create();
        (new LoadConfiguration())->bootstrap($app);

        $app->register(OpentechDirectoriesServiceProvider::class);

        $directories = new Directories();

        $builder
            ->withRouting(
                web: $directories->getWebRoutesDirectory(),
                api: $directories->getApiRoutesDirectory(),
                commands: $directories->getConsoleCommandsDirectory(),
                channels: $directories->getChannelsRoutesDirectory(),
                pages: $directories->getPagesRoutesDirectory(),
                health: $directories->getHealthRoutePath(),
                apiPrefix: $directories->getApiPrefix(),
                then: $directories->getThenCallback(),
            );

        return $builder;
    }
}
