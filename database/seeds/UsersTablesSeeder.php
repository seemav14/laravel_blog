<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@demo.com',
            'password'   =>  Hash::make('admin@123'),
            'remember_token' =>  str_random(10),
        ]);
    }

    // php artisan db:seed  // insert this in db
}



///for admin1 = admin@2019
//admin = admin123