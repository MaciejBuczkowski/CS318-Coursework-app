<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profile = new Profile;
        $profile->user_id = 1;
        $profile->date_of_birth = '2001-06-28';
        $profile->save();

        $profiles = Profile::factory()->count(5)->create();
    }
}
