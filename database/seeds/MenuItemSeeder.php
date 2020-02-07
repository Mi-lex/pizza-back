<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $pizzaTypeId = 1;
        $drinksTypeId = 2;
        $sweetsTypeId = 3;

        $menuItems = [
            // Pizzas
            [
                'name' => 'bacon double cheeseburger',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'buffalo chicken',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'chipotle chicken',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'pepperoni',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'hot and spicy',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'greek',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'greek',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'classic super',
                'type_id' => $pizzaTypeId,
            ],
            [
                'name' => 'tropical_hawaiian',
                'type_id' => $pizzaTypeId,
            ],
            // Drinks
            [
                'name' => 'coke',
                'type_id' => $drinksTypeId,
            ],
            [
                'name' => 'neste',
                'type_id' => $drinksTypeId,
            ],
            [
                'name' => 'monster_original',
                'type_id' => $drinksTypeId,
            ],
            [
                'name' => 'jigulevskoe',
                'type_id' => $drinksTypeId,
            ],
            // Sweets
            [
                'name' => 'cherry pie',
                'type_id' => $sweetsTypeId,
            ],
            [
                'name' => 'chocolate muss',
                'type_id' => $sweetsTypeId,
            ],
            [
                'name' => 'donut',
                'type_id' => $sweetsTypeId,
            ],
        ];

        foreach ($menuItems as $menuItem) {
            $menuItem['description'] = $faker->paragraph(rand(1, 3));

            if ($menuItem['type_id'] == $pizzaTypeId) {
                $min = 9;
                $max = 14;
            } else if ($menuItem['type_id'] == $drinksTypeId) {
                $min = 2;
                $max = 5;
            } else {
                $min = 5;
                $max = 7;
            }

            $menuItem['price'] = $faker->randomFloat($sweetsTypeId, $min, $max);
            DB::table('menu_items')->insert($menuItem);
        }
    }
}
