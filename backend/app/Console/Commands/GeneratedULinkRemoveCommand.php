<?php

namespace App\Console\Commands;

use App\Models\ULink;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GeneratedULinkRemoveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ulink:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all links with 15 days period of creation';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $deletedDate = Carbon::now()->subDays(15);
        ULink::where('created_at', '<=', $deletedDate->toDateString())->delete();
    }
}
