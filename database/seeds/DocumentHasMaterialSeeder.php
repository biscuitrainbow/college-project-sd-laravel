<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DocumentHasMaterialSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('document_has_materials')->insert(array(
            [
                'document_id' => 1,
                'material_id' => 1,
                'quantity' => 300,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'document_id' => 1,
                'material_id' => 2,
                'quantity' => 111,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'document_id' => 1,
                'material_id' => 3,
                'quantity' => 120,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            [
                'document_id' => 1,
                'material_id' => 4,
                'quantity' => 145,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ));
    }
}
