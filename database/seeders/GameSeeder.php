<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->delete();
        DB::table('games')->insert(
            [
                'id' => '1',
                'game_level' => '1'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '2',
                'game_level' => '2'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '3',
                'game_level' => '3'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '4',
                'game_level' => '4'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '5',
                'game_level' => '5'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '6',
                'game_level' => '6'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '7',
                'game_level' => '7'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '8',
                'game_level' => '8'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '9',
                'game_level' => '9'
            ]
        );
        DB::table('games')->insert(
            [
                'id' => '10',
                'game_level' => '10'
            ]
        );
    }
}
