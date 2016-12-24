<?php

namespace Disitec\LaravelGenerator\Commands;

use Illuminate\Console\Command;

class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'disitec:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish config, Controller stub and Layouts';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'disitec-generator.init'
        ]);
    }
}