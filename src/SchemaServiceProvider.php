<?php

/*
 * This file is part of Alt Three Schema.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Schema;

use Illuminate\Support\ServiceProvider;

class SchemaServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDump();
    }

    /**
     * Registers the dump command.
     *
     * @return void
     */
    protected function registerDump()
    {
        $this->app->singleton('command.alt-three.dump', function ($app) {
            return $app['AltThree\Schema\Commands\DumpCommand'];
        });
        $this->commands('command.alt-three.dump');
    }

    /**
     * Registers the migrate command.
     *
     * @return void
     */
    protected function registerMigrate()
    {
        $this->app->singleton('command.alt-three.migrate', function ($app) {
            return $app['AltThree\Schema\Commands\MigrateCommand'];
        });
        $this->commands('command.alt-three.migrate');
    }
}
