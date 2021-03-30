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
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '2',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '3',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '4',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '5',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '6',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '7',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '8',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '9',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '10',
        ]
      );
      DB::table('quizes')-> insert(
        [
        'time' => '10',
        'number_of_question' => '10',
        'percentage_to_pass' => '50',
        'status' => '1',
        'lesson_id' => '11',
        ]
      );

    }
}
