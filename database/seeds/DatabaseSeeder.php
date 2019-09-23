<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $data=[
        	[
        		'email'=>'member1@gmail.com',
                'name' => 'tuan',
        		'password'=>bcrypt('12345'),
        		'level'=>0
        	],
        	       
        ];
        DB::table('vp_users')->insert($data);
    }
}
