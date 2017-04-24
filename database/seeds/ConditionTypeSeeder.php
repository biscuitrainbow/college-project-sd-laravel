<?php

use Illuminate\Database\Seeder;

class ConditionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condition_types')->insert(array(
            ['name'=>'General Condition'],
            ['name'=>'Material Condition']
        ));
    }
}
