<?php

use Illuminate\Database\Seeder;
use App\Ingredient;
class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredient = new Ingredient();
        $ingredient->name = 'Cognac';
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = 'Lime';
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = 'Gin';
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = 'Coke';
        $ingredient->save();
    }
}
