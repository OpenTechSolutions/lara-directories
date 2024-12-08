<?php

return [
    'routes' => [
        'web' => app_path('/Infrastructure/Http/Routes/web.php'),
        'console' => app_path('/Infrastructure/Console/console.php')
    ],
    'console' => [
        'components_namespace' => '\Infrastructure\View\Components',
        'controllers_namespace' => '\Infrastructure\Http\Controllers',
        'casts_namespace' => '\Infrastructure\Casts',
        'channels_namespace' => '\Infrastructure\Broadcasting\Channels',
        'commands_namespace' => '\Infrastructure\Console\Commands',
        'enums_namespace' => '\Infrastructure\Enums',
        'exceptions_namespace' => '\Infrastructure\Exceptions',
        'interfaces_namespace' => '\Infrastructure\Contracts',
        'jobs_namespace' => '\Infrastructure\Jobs',
        'job_middlewares_namespace' => '\Infrastructure\Http\Middleware',
        'middlewares_namespace' => '\Infrastructure\Http\Middleware',
        'models_namespace' => '\Infrastructure\Models',
        'notifications_namespace' => '\Infrastructure\Notifications',
        'observers_namespace' => '\Infrastructure\Observers',
        'requests_namespace' => '\Infrastructure\Http\Requests',
        'resources_namespace' => '\Infrastructure\Http\Resources',
        'events_namespace' => '\Infrastructure\Events',
        'listeners_namespace' => '\Infrastructure\Listeners',
        'mail_namespace' => '\Infrastructure\Mail',
        'policies_namespace' => '\Infrastructure\Policies',
        'providers_namespace' => '\Infrastructure\Providers',
        'scopes_namespace' => '\Infrastructure\Models\Scopes',
        'rules_namespace' => '\Infrastructure\Rules',
        'traits_namespace' => '\Infrastructure\Traits',
        'views_namespace' => '\Infrastructure\View',
        'commands' => app_path('/Infrastructure/Console/Commands/'),
    ],
    'view' => [
        'paths' =>[
             app_path('Infrastructure/View/Templates')
        ],
    ]
];
