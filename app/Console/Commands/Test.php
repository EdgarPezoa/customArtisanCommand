<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:params {--helloworld=Default Hello World}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom artisan command proyect, return params';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $helloworld = $this->option('helloworld');
        $bar = $this->output->createProgressBar(2);
        $bar->start();

        
        $this->line("");
        $this->line('Starting command');
        $this->line("Return -> ". $helloworld);
        $bar->advance();

        $name = $this->ask('What is your name?');
        $password = $this->secret('What is the password?');
        $this->line("Return -> ".$name.", ".$password);
        $bar->advance();
        
        $bar->finish();
        $this->line("");
        $this->info('Command end succesfully');
        return 0;
    }
}
