<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hashed_random_password = Hash::make("1234567890");

      DB::table('question_banks')-> delete();
      DB::table('answer_banks')-> delete();

      DB::table('question_banks')-> insert(
        [
          'id' => '1',
          'question' => 'IR 4.0 merujuk kepada',
          'status' => '1',
          'lesson_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Internet Revolution 4.0',
          'status' => 'False',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Instagram Revolution 4.0',
          'status' => 'False',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industrial Revolution 4.0',
          'status' => 'True',
          'question_id' => '1',
        ]
      );

      DB::table('answer_banks')-> insert(
        [
          'answer' => 'Industries Revolution 4.0',
          'status' => 'False',
          'question_id' => '1',
        ]
      );

    }
}
