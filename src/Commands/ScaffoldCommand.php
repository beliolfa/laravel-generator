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
        $this->info("Generando scaffolding para $model");
    }
}