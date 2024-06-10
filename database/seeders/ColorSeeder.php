<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'Ak', 'name_en' => 'White', 'name_ru' => 'белый'],
            ['name' => 'Gara', 'name_en' => 'Black', 'name_ru' => 'Black'],
            ['name' => 'Gök', 'name_en' => 'Blue', 'name_ru' => 'Синий'],
            ['name' => 'Ýaşyl', 'name_en' => 'Green', 'name_ru' => 'Зеленый'],
            ['name' => 'Sary', 'name_en' => 'Yellow', 'name_ru' => 'Желтый'],
            ['name' => 'Çal', 'name_en' => 'Gray' , 'name_ru' => 'Серый'],
            ['name' => 'Gyzyl', 'name_en' => 'Red', 'name_ru' => 'Красный'],
        ];

        foreach ($colors as $color) {
            $obj = new Color();
            $obj->name = $color['name'];
            $obj->name_en = $color['name_en'];
            $obj->name_ru = $color['name_ru'];
            $obj->save();
        }
    }
}
