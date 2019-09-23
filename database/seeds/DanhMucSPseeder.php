<?php

use Illuminate\Database\Seeder;

class DanhMucSPseeder extends Seeder
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
        		'ten_sp' => 'Iphone',
        		'slug_sp'=> str_slug('Iphone')
        	],
        	[
        		'ten_sp' => 'Samsung',
        		'slug_sp'=> str_slug('Samsung')
        	],        
        ];
        DB::table('danhmucsp')->insert($data);
    }
}
