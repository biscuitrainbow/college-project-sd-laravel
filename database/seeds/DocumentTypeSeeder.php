<?php

use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_types')->insert(array(
            [
                'name'  =>'inquiry' ,
            ],
            [
                'name'  =>'quotation' ,
            ],
            [
                'name'  =>'purchase order' ,
            ],
            [
                'name'  =>'sale order' ,
            ],
            [
                'name'  =>'goods issue' ,
            ],
            [
                'name'  =>'invoice' ,
            ],
            [
                'name'  =>'receipt' ,
            ],
        ));
    }
}
