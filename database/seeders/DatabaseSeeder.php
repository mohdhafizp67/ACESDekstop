<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call('Database\Seeders\UserSeeder');
        $this->call('Database\Seeders\LessonSeeder');
        $this->call('Database\Seeders\QuizSeeder');
        $this->call('Database\Seeders\QuestionSeeder');
        $this->call('Database\Seeders\NegeriSeeder');
        $this->call('Database\Seeders\SekolahSeeder');
        $this->call('Database\Seeders\GameSeeder');

    }
}
