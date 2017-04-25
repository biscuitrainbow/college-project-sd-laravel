<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('conditions')->insert(array(
            ['name' => 'World Cup',
                'discount' => 20.00,
                'min' => 200,
                'condition_type_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            ['name' => 'Songkarn Festival',
                'discount' => 50.00,
                'min' => 150,
                'condition_type_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            ['name' => 'New Year Eve',
                'discount' => 25.00,
                'min' => 20,
                'condition_type_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            ['name' => 'Chinese New Year',
                'discount' => 2000.00,
                'min' => 200,
                'condition_type_id' => 1,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            ['name' => 'Pencil Skirts S Discount',
                'discount' => 350.00,
                'min' => 15,
                'condition_type_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            ['name' => 'Pencil Skirts M Discount',
                'discount' => 350.00,
                'min' => 15,
                'condition_type_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ],
            ['name' => 'Pencil Skirts L Discount',
                'discount' => 350.00,
                'min' => 15,
                'condition_type_id' => 2,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]
        ));
    }
}

