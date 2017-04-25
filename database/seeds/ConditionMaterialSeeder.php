<?php

use Illuminate\Database\Seeder;

class ConditionMaterialSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('condition_material')->insert(array(
            ['condition_id' => 5,
                'material_id' => 1],
            ['condition_id' => 6,
                'material_id' => 2],
            ['condition_id' => 7,
                'material_id' => 3],
        ));
    }
}

