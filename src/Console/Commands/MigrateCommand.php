<?php

declare(strict_types=1);

namespace Rinvex\Pages\Console\Commands;

use Illuminate\Console\Command;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:migrate:pages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Rinvex Pages Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Migrate rinvex/pages:');
        $this->call('migrate', ['--step' => true, '--path' => 'vendor/rinvex/pages/database/migrations']);
    }
}