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
        $data=[
        	[
        		'email'=>'tuannguyen@gmail.com',
        		'password'=>bcrypt('12345'),
        		'level'=>1
        	],
        	[
        		'email'=>'admin@gmail.com',
        		'password'=>bcrypt('12345'),
        		'level'=>1
        	],
            [
                'email'=>'tet@gmail.com',
                'password'=>bcrypt('12345'),
                'level'=>0
            ],     
        ];
        DB::table('vp_users')->insert($data);
    }
}
