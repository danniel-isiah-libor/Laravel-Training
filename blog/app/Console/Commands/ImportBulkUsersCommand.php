<?php

namespace App\Console\Commands;

use App\Jobs\ImportUserJob;
use App\Models\User;
use Illuminate\Console\Command;

class ImportBulkUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will import many users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Running....');

        $this->info('Import is done!');

        $this->alert('Warning');

        $this->error('Danger');

        $users = User::all(); // from csv....

        foreach ($users as $user) {
            ImportUserJob::dispatch($user);
        }
    }
}
