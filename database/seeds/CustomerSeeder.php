<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(array(
            [
                'company_name' =>'119 Export Shop' ,
                'address' => '101 Phahonyothin Rd. Chatuchak',
                'region'=> 'Bangkok',
                'country' => 'Thailand',
                'postal_code' => '10900',
                'email'=>'export@gmail.com',
                'tel'=> '02-9966-998',
                'website'=>'',
                'title'=>'',
                'name'=>'',
                'position'=>'',
                'department'=>''
            ],
        ));
    }
}
