<?php

/*
 * This file is part of Alt Three Schema.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AltThree\Schema\Commands;

use Illuminate\Console\Command;

/**
 * This is the migrate command class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class MigrateCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'db:schema:migrate';

   /**
    * The console command description.
    *
    * @var string
    */
   protected $description = 'Migrates the schema dump.';
}
