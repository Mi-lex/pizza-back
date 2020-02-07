<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'pizza'
            ],
            [
                'name' => 'drinks'
            ],
            [
                'name' => 'sweets'
            ]
        ];

        foreach ($types as $type) {
            DB::table('types')->insert($type);
        }
    }
}
