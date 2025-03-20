# Lara Directories Package

**!!!! This is experimental and comes with some caveats !!!!**<br>
The Laravel Directories package, `opentech/directories`, aims to provide a more flexible and organized directory structure for Laravel applications. By modifying the default Laravel configuration, you can break out of the default folder structure and separate your infrastructure, application, and domain logic.

```markdown
app/
├── Infrastructure/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Routes/
│   ├── Models/
│   ├── Providers/
│   ├── View/
│   │   ├── Components/
│   │   └── Templates/
│   
└── Domain/
└── Application/
```

## Installation

1. Install the package using Composer:

```bash
composer require opentech/directories
```

2. Modify the `bootstrap/app.php` file to initialize the package's factory:

```php
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Opentech\Directories\ApplicationBuilderFactory;

$builder = ApplicationBuilderFactory::make(__DIR__);

return $builder
    ->withMiddleware(function (Middleware $middleware) {
    //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

```

3. Publish the package's configuration file:

```bash
php artisan vendor:publish --provider="Opentech\Directories\DirectoriesServiceProvider" --tag="config"
```

This will create a new configuration file at `config/directories.php`. You can modify this file to customize the namespaces and paths according to your project's needs.

4. Move the routes files to the `Routes` folder:

By default, Laravel stores its routes in the `routes` directory. To use the package's modified routes structure, move the `web.php` and `console.php` files to the `Infrastructure/Http/Routes` folder. Update the `routes` configuration in the `config/directories.php` file accordingly.



## Caveats

- Laravel hard codes a lot of functionality into its artisan commands, so commands like installing the Broadcasting functionality (`php artisan install:broadcasting`) may not work due to this.
- To work around this, install the necessary packages before you hack the routes folder or create the `/routes/console.php` file if you moved it already.

## Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or submit a pull request on the [GitHub repository](https://github.com/opentechsolutions/lara-directories).

## License

The Lara Directories package is open-sourced software licensed under the GNU General Public License v3.0.

## Credits

This package was developed by [Ron Darby @ OpenTech Solutions](https://opentechsolutions.co.za/).
