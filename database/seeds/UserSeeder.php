<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userObject = new App\User();
        $userObject->name = 'Supper Admin';
        $userObject->email = 'azeem.tahir@gmail.com';
        $userObject->password =  \Illuminate\Support\Facades\Hash::make('azeemtahir');
        $userObject->role_id = 1;
        $userObject->save();
    }
}
