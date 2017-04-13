<?php 

namespace Tylercd100\Validator\State;

use Exception;
use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Tylercd100\Validator\State\Validator as StateValidator;
use Validator;

class ServiceProvider extends IlluminateProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        Validator::replacer('state', function ($message, $attribute, $rule, $parameters) {
            return "State/Province is invalid";
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving('validator', function ($factory, $app) {
            $factory->extend('state', function ($attribute, $value, $parameters, $validator) {
                $y = new Parameters($parameters);
                $x = new StateValidator($y);
                $r = $x->validate($value);
                var_dump([$r, $value]);
                return $r;
            });
        });
    }
}
