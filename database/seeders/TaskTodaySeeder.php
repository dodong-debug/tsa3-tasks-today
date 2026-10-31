<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;

class TaskTodaySeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::today();

        $tasks = [
            ['title' => 'Complete Laravel Activity', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Review Database Migration', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Create Task Management UI', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Study Eloquent Models', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Submit School Requirements', 'status' => 'pending', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Organize Project Files', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Prepare Documentation', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Review Laravel Routes', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }

        User::create([
            'username' => 'student',
            'full_name' => 'Student Developer',
            'email' => 'student@example.com',
        ]);
    }
}
