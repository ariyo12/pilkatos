<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ariyo Ahmad',
            'email' => 'ariyo@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
