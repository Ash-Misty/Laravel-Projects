<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Task;
use Carbon\Carbon;

class AutoCompleteTasks extends Command
{
    protected $signature = 'tasks:auto-clean';

    protected $description = 'Mark old tasks as completed, and delete completed ones older than 2 minutes';

    public function handle()
    {
        // Mark tasks older than 1 minute as completed
        $completed = Task::where('isCompleted', false)
            ->where('created_at', '<', now()->subMinute())
            ->update(['isCompleted' => true]);

        // Delete tasks  completed before 2 minutes
        $deleted = Task::where('isCompleted', true)
            ->where('updated_at', '<', now()->subMinute())
            ->delete();

        $this->info("Tasks marked as completed: {$completed}");
        $this->info("Completed tasks deleted: {$deleted}");
    }
}
