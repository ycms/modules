<?php

namespace YCMS\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(
            'YCMS\Modules\Contracts\RepositoryInterface',
            'YCMS\Modules\Repository'
        );
    }
}
