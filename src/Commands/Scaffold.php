<?php

namespace Disitec\LaravelGenerator\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Scaffold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'disitec:scaffold {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold Model, Controller and Views';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = $this->argument('model');

        $this->call('infyom:scaffold', [
            'model' => $model,
            '--skip' => 'scaffold_requests'
        ]);

        Storage::delete(app_path("Repositories/{$model}Repository.php"));
        $this->info("Repositories/{$model}Repository.php sin uso eliminado.");
    }
}