<?php

use App\Models\User;
use App\Models\Profile;
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
        User::create(['username' => 'admin','email' => 'admin@touristclubsust.net','password' => bcrypt('1')]);
        Profile::create(['fullName' => 'Administrator', 'user_id' => 1]);

        User::create(['username' => 'nayeem','email' => 'tanayeem.csesust@gmail.com','password' => bcrypt('2')]);
        Profile::create(['fullName' => 'Tanvir Ahamed Nayeem', 'user_id' => 2]);

        User::create(['username' => 'sourav','email' => 'sourav.bhowmik52@gmail.com','password' => bcrypt('3')]);
        Profile::create(['fullName' => 'Sourav Bhowmik', 'user_id' => 3]);

    }
}
