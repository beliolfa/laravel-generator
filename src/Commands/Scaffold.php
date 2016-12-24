<?php

namespace Disitec\LaravelGenerator\Commands;

use Disitec\LaravelGenerator\Translator\Translate;
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
    protected $description = 'Scaffold Model, Migration, Controller and Views';


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
            '--skip' => 'scaffold_requests, repository'
        ]);

        $translate = new Translate($model);
        
        $translate->controller();
        $translate->views();
        
        $this->info('Views translated');

    }
}