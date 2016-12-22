<?php

namespace Disitec\LaravelGenerator\Commands;

use Illuminate\Console\Command;

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

        $path = app_path("Repositories/{$model}Repository.php");
        if (file_exists($path)) {
            if (unlink($path)){
                $this->info("{$model}Repository.php eliminado.");
            }
        }
    }
}