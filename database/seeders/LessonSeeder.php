<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hashed_random_password = Hash::make("1234567890");

      DB::table('lessons')-> delete();
      DB::table('lessons')-> insert(
        [
        'id' => '1',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Introduction',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '2',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Virtual Reality',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '3',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Internet of Things',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '4',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Big Data',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '5',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Cyber Security',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '6',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Cloud Computing',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '7',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Additive Manufacturing',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '8',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Advanced Simulation',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '9',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Universal Integration',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '10',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Autonomous Robot',
        ]
      );

      DB::table('lessons')-> insert(
        [
        'id' => '11',
        'lesson_type' => 'IR 4.0',
        'lesson_subject' => 'Pillar',
        ]
      );





    }
}
