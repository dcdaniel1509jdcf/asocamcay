<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
            'name'=>'daniel',
            'last_name'=>'cahuatijo',
            'ci'=>'11',
            'contact'=>'contact',   
            'email'=>"jdcf@gmail.com",
            'password'=>\Hash::make('123456'),
            'type'=>'admin',
            'active'=>1,
            'address'=>'Quito - Tumbaco',
            'notice'=>'si',
            
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime
            ],
            [
                'name'=>'Oved',
                'last_name'=>'Fiso',
                'ci'=>'111',
            'contact'=>'contact', 
                
                'email'=>"cf@gmail.com",
                'password'=>\Hash::make('123456'),
                'type'=>'user',
                'active'=>1,
                'address'=>'Quito - Pifo',
                'notice'=>'no',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime
                ],

        );
        User::insert($data);
    }
}
