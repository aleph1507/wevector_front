<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
         'name' => 'wevector',
         'email' => 'wevector@wevector.com',
         'password' => bcrypt('cSfn+M5kgmU='),
     ]);
    }
}
