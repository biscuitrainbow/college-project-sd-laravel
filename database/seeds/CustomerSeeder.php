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
                'code' => 'WA00010',
                'name' => 'Pencil Skirts S',
                'price' => 250,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00110',
                'name' => 'Pencil Skirts M',
                'price' => 250,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00210',
                'name' => 'Pencil Skirts L',
                'price' => 250,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00011',
                'name' => 'Pleats Satin Skirt S',
                'price' => 300,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00111',
                'name' => 'Pleats Satin Skirt M',
                'price' => 300,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00211',
                'name' => 'Pleats Satin Skirt L',
                'price' => 300,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00012',
                'name' => 'Mini Denim Skirt S',
                'price' => 250,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00112',
                'name' => 'Mini Denim Skirt M',
                'price' => 250,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00212',
                'name' => 'Mini Denim Skirt L',
                'price' => 250,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00013',
                'name' => 'Maxi Printed Skirt S',
                'price' => 300,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00113',
                'name' => 'Maxi Printed Skirt M',
                'price' => 300,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WA00213',
                'name' => 'Maxi Printed Skirt L',
                'price' => 300,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00011',
                'name' => 'Floral Printed Dress',
                'price' => 500,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00012',
                'name' => 'Off-Shoulder Printed Dress',
                'price' => 550,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00013',
                'name' => 'Pleated Midi Dress',
                'price' => 600,
                'quantity' => 150,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00014',
                'name' => 'Daisies Jumpsuit Dress',
                'price' => 550,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00015',
                'name' => 'Maxi Jumpsuit Dress',
                'price' => 800,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00016',
                'name' => 'Cocktail Dress red',
                'price' => 900,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WD00017',
                'name' => 'Cocktail Dress White',
                'price' => 900,
                'quantity' => 100,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WX00011',
                'name' => 'Oxford Shirt White',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WX00012',
                'name' => 'Oxford Shirt Black',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WX00013',
                'name' => 'Oxford Shirt Light Blue',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WX00014',
                'name' => 'Oxford Shirt Dark Gray',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WX00015',
                'name' => 'Oxford Shirt Pink',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00016',
                'name' => 'Navy Blue Striped Blazer M',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00116',
                'name' => 'Navy Blue Striped Blazer L',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00017',
                'name' => 'Black & White Striped Blazer M',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00117',
                'name' => 'Black & White Striped Blazer L',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00018',
                'name' => 'Basic Off-White Blazer M',
                'price' => 800,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00118',
                'name' => 'Basic Off-White Blazer L',
                'price' => 800,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00019',
                'name' => 'Basic Double Black Blazer M',
                'price' => 800,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WB00119',
                'name' => 'Basic Double Black Blazer L',
                'price' => 800,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00010',
                'name' => 'Satin Sneaker 37',
                'price' => 1000,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00110',
                'name' => 'Satin Sneaker 38',
                'price' => 1000,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00210',
                'name' => 'Satin Sneaker 39',
                'price' => 1000,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00011',
                'name' => 'Black Leather Sandals 37',
                'price' => 850,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00111',
                'name' => 'Black Leather Sandals 38',
                'price' => 850,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00211',
                'name' => 'Black Leather Sandals 39',
                'price' => 850,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00020',
                'name' => 'Metallic High Heel Shoes 37',
                'price' => 1100,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00120',
                'name' => 'Metallic High Heel Shoes 38',
                'price' => 1100,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00220',
                'name' => 'Metallic High Heel Shoes 39',
                'price' => 1100,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00021',
                'name' => 'Platform Heel Sandals 37',
                'price' => 1000,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00121',
                'name' => 'Platform Heel Sandals 38',
                'price' => 1000,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'WS00221',
                'name' => 'Platform Heel Sandals 39',
                'price' => 1000,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'women'
            ],
            [
                'code' => 'MT00011',
                'name' => 'Linen T-Shirt S',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00111',
                'name' => 'Linen T-Shirt M',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00211',
                'name' => 'Linen T-Shirt L',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00012',
                'name' => 'Painted T-Shirt S',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00112',
                'name' => 'Painted T-Shirt M',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00212',
                'name' => 'Painted T-Shirt L',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00013',
                'name' => 'Blue Panels T-Shirt S',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00113',
                'name' => 'Blue Panels T-Shirt M',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00213',
                'name' => 'Blue Panels T-Shirt L',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00014',
                'name' => 'Gray Panels T-Shirt S',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00114',
                'name' => 'Blue Panels T-Shirt M',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MT00214',
                'name' => 'Blue Panels T-Shirt L',
                'price' => 250,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MB00010',
                'name' => 'Navy Blue Striped Blazer',
                'price' => 1000,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MB00020',
                'name' => 'Black & White Striped Blazer',
                'price' => 1000,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MB00030',
                'name' => 'Basic Black Blazer',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MB00040',
                'name' => 'Basic Gray Blazer',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MB00050',
                'name' => 'Basic Sky Blue Blazer',
                'price' => 900,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00015',
                'name' => 'Jogging Trousers M',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00115',
                'name' => 'Jogging Trousers L',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00016',
                'name' => 'Soft Cargo Trousers M',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00116',
                'name' => 'Soft Cargo Trousers L',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00017',
                'name' => 'Ink Blue Comfort Trousers M',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00117',
                'name' => 'Ink Blue Comfort Trousers L',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00018',
                'name' => 'Gray Basic Linen Trousers M',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00118',
                'name' => 'Gray Basic Linen Trousers L',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00019',
                'name' => 'Beige Basic Linen Trousers M',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00119',
                'name' => 'Beige Basic Linen Trousers L',
                'price' => 800,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00020',
                'name' => 'Khaki Cotton Short M',
                'price' => 500,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00120',
                'name' => 'Khaki Cotton Short L',
                'price' => 500,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00021',
                'name' => 'Tan Cotton Short M',
                'price' => 500,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00121',
                'name' => 'Tan Cotton Short L',
                'price' => 500,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00022',
                'name' => 'Black Cotton Short M',
                'price' => 500,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MU00122',
                'name' => 'Black Cotton Short L',
                'price' => 500,
                'quantity' => 500,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MM00011',
                'name' => 'Two-Tone Wool Suit',
                'price' => 1800,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MM00022',
                'name' => 'Ink Blue Suit',
                'price' => 1500,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MM00033',
                'name' => 'Black Cotton Suit',
                'price' => 1500,
                'quantity' => 200,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00014',
                'name' => 'Brown Leather Shoes 40',
                'price' => 1200,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00114',
                'name' => 'Brown Leather Shoes 42',
                'price' => 1200,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00214',
                'name' => 'Brown Leather Shoes 44',
                'price' => 1200,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00015',
                'name' => 'Black Leather Shoes 40',
                'price' => 1200,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00115',
                'name' => 'Black Leather Shoes 42',
                'price' => 1200,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00215',
                'name' => 'Black Leather Shoes 44',
                'price' => 1200,
                'quantity' => 250,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00016',
                'name' => 'Navy Sneakers 40',
                'price' => 1000,
                'quantity' => 300,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00116',
                'name' => 'Navy Sneakers 42',
                'price' => 1000,
                'quantity' => 300,
                'type' => 'finish goods',
                'category' => 'men'
            ],
            [
                'code' => 'MS00216',
                'name' => 'Navy Sneakers 44',
                'price' => 1000,
                'quantity' => 300,
                'type' => 'finish goods',
                'category' => 'men'
            ],


        ));
    }
}
