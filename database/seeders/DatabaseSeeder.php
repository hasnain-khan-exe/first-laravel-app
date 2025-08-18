<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Hasnain',
            'last_name' => 'Khan',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeeder::class);



        // Job::factory()->count(20)->create();

        //     // Create some tags
        // $tags = Tag::factory()->count(10)->create();

        // // Attach random tags to each job
        // Job::all()->each(function ($job) use ($tags) {
        //     $job->tags()->attach(
        //         $tags->random(rand(1, 3))->pluck('id')->toArray()
        //     );
        // });

    }
}
