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
                'title'=>'Mr.',
                'name'=>'Pim Jaidee',
                'position'=>'',
                'department'=>''
            ] ,

            [
                'company_name' =>'Were Ware Ltd.' ,
                'address' => '1566 Sathupradit Rd. Chongnonsee,Yannawa',
                'region'=> 'Bangkok',
                'country' => 'Thailand',
                'postal_code' => '10120',
                'email'=>'Beuty1@hotmail.com',
                'tel'=> '02-4857-7895',
                'website'=>'',
                'title'=>'Ms.',
                'name'=>'Pramate Pungboon',
                'position'=>'',
                'department'=>''
            ] ,

            [
                'company_name' =>'M&N Shop Ltd.' ,
                'address' => '161 Phahonyothin Rd. Chatuchak',
                'region'=> 'Bangkok',
                'country' => 'Thailand',
                'postal_code' => '10900',
                'email'=>'wandnshop@gmail.com',
                'tel'=> '082-195-4896',
                'website'=>'',
                'title'=>'Mr.',
                'name'=>'Puckdee Srisod',
                'position'=>'',
                'department'=>''
            ] ,

            [
                'company_name' =>'Red Apple Fashion Ltd.' ,
                'address' => '108 Soi15 Sirimangkalajarn Rd. T.Suthep A.Mung',
                'region'=> 'Chiang Mai',
                'country' => 'Thailand',
                'postal_code' => '50200',
                'email'=>'redapple@gmail.com',
                'tel'=> '092-145-8899',
                'website'=>'',
                'title'=>'Ms.',
                'name'=>'Anya Sandee',
                'position'=>'',
                'department'=>''
            ]
        ));
    }
}
