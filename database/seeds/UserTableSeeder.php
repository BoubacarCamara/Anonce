<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert(
  [
       [
           'name'              => 'admin',
           'prenom'              => 'admin',
           'telephone'              => '783652456',
           'email'             => 'admin@email.com',
           'email_verified_at' => now(),
           'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           'status'             => 'admin',
           'remember_token'    => Str::random(10),
       ],
       [
           'name'              => 'user',
           'prenom'            => 'user',
           'telephone'         => '783652456',
           'email'             => 'user@email.com',
           'email_verified_at' => now(),
           'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           'status'            => 'user',
           'remember_token'    => Str::random(10),
       ]
   ]
);
 
    }
}
