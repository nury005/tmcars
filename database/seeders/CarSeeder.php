<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'Lamborghini', 'price' => 1, 'location' => 5, 'brand' => 7, 'color' => 3, 'year' => 3],
        ];

        foreach ($colors as $color) {
            $obj = new Car();
            $obj->name = $color['name'];
            $obj->location_id = $color['location'];
            $obj->brand_id = $color['brand'];
            $obj->color_id = $color['color'];
            $obj->year_id = $color['year'];
            $obj->price = $color['price'];
            $obj->save();
        }
    }
}
