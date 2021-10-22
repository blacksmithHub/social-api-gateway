<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Resources\Auth\{
    AuthResource
};
use App\Resources\Contracts\Auth\{
    AuthResourceInterface
};
use App\Resources\Contracts\Customer\{
    CustomerResourceInterface
};
use App\Resources\Customer\{
    CustomerResource
};

class ResourceServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        AuthResourceInterface::class => AuthResource::class,
        CustomerResourceInterface::class => CustomerResource::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
