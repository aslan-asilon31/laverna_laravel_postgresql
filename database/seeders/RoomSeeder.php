<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room\Room;
use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startDate = Carbon::create(2023, 7, 31);
        $endDate = Carbon::create(2023, 8, 10);

        while ($startDate <= $endDate) {
            Room::create([
                'room_category_id' => 1, // Replace with your actual room category ID
                'amenity_id' => 1, // Replace with your actual amenity ID
                'bed_type_id' => 1, // Replace with your actual bed type ID
                'cancellation_id' => 1, 
                'name' => 'Sample Room',
                'image' => 'img.png',
                'room_availability' => $startDate,
                'children_amount' => 2,
                'adult_amount' => 2,
                'price_base' => mt_rand(500000, 4000000),
                'discount' => 0,
                'price_after' => mt_rand(700000, 5000000),
                'description' => 'This is a sample room description.',
            ]);

            $startDate->addDay(); // Move to the next day
        }
    }
}
