<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hashed_random_password = Hash::make("1234567890");

      DB::table('users')-> delete();
      DB::table('users')-> insert(
        [
        'id' => '1',
        'name' => 'SYED SYAHDAN',
        'email' => 'user1@aces.com',
        'password' => $hashed_random_password,
        'ic_number' => '000000000000',
        'phone' => '0123456789',
        'address' => 'KAMPONG BATU UDANG',
        'postcode' => '18200',
        'state' => 'Kelantan',
        'district' => 'Dabong',
        'is_admin' => '1',
        'is_active' => '1',
        'is_student' => '0',
        'is_ecerdb_personnel' => '0',
        ]
      );

      DB::table('users')-> insert(
        [
        'id' => '2',
        'name' => 'HAFIZ AL-GHIYATUDDIN',
        'email' => 'user2@aces.com',
        'password' => $hashed_random_password,
        'ic_number' => '111111111111',
        'phone' => '0123456789',
        'address' => 'PENGKALAN CHEPA',
        'postcode' => '16100',
        'state' => 'Kelantan',
        'district' => 'Dabong',
        'is_admin' => '0',
        'is_active' => '1',
        'is_student' => '0',
        'is_ecerdb_personnel' => '1',
        ]
      );

    }
}
