<?php

use Illuminate\Database\Seeder;


class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('materials')->insert(array(

            [
                'code' =>'WA00010' ,
                'name' => 'Pencil Skirts S',
                'price' => 250,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00110' ,
                'name' => 'Pencil Skirts M',
                'price' => 250,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00210' ,
                'name' => 'Pencil Skirts L',
                'price' => 250,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00011' ,
                'name' => 'Pleats Satin Skirt S',
                'price' => 300,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00111' ,
                'name' => 'Pleats Satin Skirt M',
                'price' => 300,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00211' ,
                'name' => 'Pleats Satin Skirt L',
                'price' => 300,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00012' ,
                'name' => 'Mini Denim Skirt S',
                'price' => 250,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00112' ,
                'name' => 'Mini Denim Skirt M',
                'price' => 250,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00212' ,
                'name' => 'Mini Denim Skirt L',
                'price' => 250,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00013' ,
                'name' => 'Maxi Printed Skirt S',
                'price' => 300,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00113' ,
                'name' => 'Maxi Printed Skirt M',
                'price' => 300,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WA00213' ,
                'name' => 'Maxi Printed Skirt L',
                'price' => 300,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00011' ,
                'name' => 'Floral Printed Dress',
                'price' => 500,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00012' ,
                'name' => 'Off-Shoulder Printed Dress',
                'price' => 550,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00013' ,
                'name' => 'Pleated Midi Dress',
                'price' => 600,
                'quantity' => 150,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00014' ,
                'name' => 'Daisies Jumpsuit Dress',
                'price' => 550,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00015' ,
                'name' => 'Maxi Jumpsuit Dress',
                'price' => 800,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00016' ,
                'name' => 'Cocktail Dress red',
                'price' => 900,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WD00017' ,
                'name' => 'Cocktail Dress White',
                'price' => 900,
                'quantity' => 100,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WX00011' ,
                'name' => 'Oxford Shirt White',
                'price' => 250,
                'quantity' => 500,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WX00012' ,
                'name' => 'Oxford Shirt Black',
                'price' => 250,
                'quantity' => 500,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WX00013' ,
                'name' => 'Oxford Shirt Light Blue',
                'price' => 250,
                'quantity' => 500,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WX00014' ,
                'name' => 'Oxford Shirt Dark Gray',
                'price' => 250,
                'quantity' => 500,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WX00015' ,
                'name' => 'Oxford Shirt Pink',
                'price' => 250,
                'quantity' => 500,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00016' ,
                'name' => 'Navy Blue Striped Blazer M',
                'price' => 900,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00116' ,
                'name' => 'Navy Blue Striped Blazer L',
                'price' => 900,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00017' ,
                'name' => 'Black & White Striped Blazer M',
                'price' => 900,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00117' ,
                'name' => 'Black & White Striped Blazer L',
                'price' => 900,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00018' ,
                'name' => 'Basic Off-White Blazer M',
                'price' => 800,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00118' ,
                'name' => 'Basic Off-White Blazer L',
                'price' => 800,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00019' ,
                'name' => 'Basic Double Black Blazer M',
                'price' => 800,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WB00119' ,
                'name' => 'Basic Double Black Blazer L',
                'price' => 800,
                'quantity' => 250,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00010' ,
                'name' => 'Satin Sneaker 37',
                'price' => 1000,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00110' ,
                'name' => 'Satin Sneaker 38',
                'price' => 1000,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00210' ,
                'name' => 'Satin Sneaker 39',
                'price' => 1000,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00011' ,
                'name' => 'Black Leather Sandals 37',
                'price' => 850,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00111' ,
                'name' => 'Black Leather Sandals 38',
                'price' => 850,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00211' ,
                'name' => 'Black Leather Sandals 39',
                'price' => 850,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00020' ,
                'name' => 'Metallic High Heel Shoes 37',
                'price' => 1100,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00120' ,
                'name' => 'Metallic High Heel Shoes 38',
                'price' => 1100,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00220' ,
                'name' => 'Metallic High Heel Shoes 39',
                'price' => 1100,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00021' ,
                'name' => 'Platform Heel Sandals 37',
                'price' => 1000,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00121' ,
                'name' => 'Platform Heel Sandals 38',
                'price' => 1000,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ],
            [
                'code' =>'WS00221' ,
                'name' => 'Platform Heel Sandals 39',
                'price' => 1000,
                'quantity' => 200,
                'type'=> 'finish goods',
                'category'=> 'women'
            ]
            )
        );
    }
}
