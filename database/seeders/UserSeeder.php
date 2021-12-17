<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = 'Maciej';
        $user->email = 'test@mail.com';
        $user->password = '$2y$10$bs01UQVeNTfD.SO0nU9jq.KLFIGINXq7eSt4jBNZE0M5tSk9Qf6Li';
        $user->save();

        $users = User::factory()->count(5)->create();
    }
}
