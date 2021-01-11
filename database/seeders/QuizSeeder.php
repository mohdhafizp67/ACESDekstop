<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hashed_random_password = Hash::make("1234567890");

      DB::table('quizes')-> delete();
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '1',
        ]
      );

    }
}
