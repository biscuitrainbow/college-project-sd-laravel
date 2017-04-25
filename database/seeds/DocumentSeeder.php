<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('documents')->insert(array(
            [
                'request_date' => '05/29/2017',
                'description' => '119 Export Shop Description',
                'condition_id' => null,
                'document_id' => null,
                'document_type_id' => 1,
                'customer_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ));
    }
}
