<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roleObject= new App\Role();
        $roleObject->name ='admin';
        $roleObject->description ='adminRole';
        $roleObject->save();

        $roleObject= new App\Role();
        $roleObject->name ='user';
        $roleObject->description ='userRole';
        $roleObject->save();
    }
}
