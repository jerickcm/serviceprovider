<?php

namespace Jerickcm\Serviceprovider\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProviders  extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        dd("We are loading our package");     
    }
    
}
