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
        'name' => 'Syed Syahdan',
        'email' => 'user1@aces.com',
        'password' => $hashed_random_password,
        'ic_number' => '000000000000',
        'phone' => '0123456789',
        'address' => 'Shah Alam',
        'postcode' => '40150',
        'state' => 'Selangor',
        'is_admin' => '1',
        'is_active' => '1',
        'is_student' => '0',
        'is_ecerdb_personnel' => '0',
        ]
      );

      DB::table('users')-> insert(
        [
        'id' => '2',
        'name' => 'Hafiz Al-Ghiyatuddin',
        'email' => 'user2@aces.com',
        'password' => $hashed_random_password,
        'ic_number' => '111111111111',
        'phone' => '0123456789',
        'address' => 'Shah Alam',
        'postcode' => '40150',
        'state' => 'Selangor',
        'is_admin' => '0',
        'is_active' => '1',
        'is_student' => '0',
        'is_ecerdb_personnel' => '1',
        ]
      );

      DB::table('users')-> insert(
        [
        'id' => '3',
        'name' => 'Luqman Nul Hakeem',
        'email' => 'user3@aces.com',
        'password' => $hashed_random_password,
        'ic_number' => '222222222222',
        'phone' => '0123456789',
        'address' => 'Shah Alam',
        'postcode' => '40150',
        'state' => 'Selangor',
        'is_admin' => '0',
        'is_active' => '1',
        'is_student' => '1',
        'is_ecerdb_personnel' => '0',
        ]
      );

      DB::table('students')-> delete();
      DB::table('students')-> insert(
        [
        'user_id' => '3',
        ]
      );

    }
}
