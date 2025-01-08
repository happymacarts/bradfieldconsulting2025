<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GrepDebug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:grep-debug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the codebase for debug() statements';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->comment('Checking now!');
        $command = "grep -RInP '^(?!(\s*\/\/)).*debug\(' --exclude-dir=vendor --exclude-dir=.vapor --exclude-dir=storage --exclude-dir=node_modules --exclude-dir='phpunit-coverage' --exclude=_ide_helper.php --exclude=GrepDebug.php ";
        $grep = `$command | wc -l`;
        if ($grep >= 1) {
            $this->newLine();
            $this->line(`$command`);
            $this->error('Remove Debug statements prior to deployment');

            return 1;
        } else {
            $this->info('You are good.');
        }
    }
}
