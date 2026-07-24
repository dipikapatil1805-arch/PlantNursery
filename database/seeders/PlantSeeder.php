<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    public function run(): void
    {
        Plant::create([
            'name' => 'AloeVera',
            'category' => 'Indoor',
            'price' => 299,
            'image' => 'aloe.jpg',
            'description' => 'A medicinal indoor plant with air-purifying properties.',
            'care_guide' => 'Water once a week and keep in indirect sunlight.'
        ]);

        Plant::create([
            'name' => 'snake plant',
            'category' => 'Indoor',
            'price' => 399,
            'image' => 'snake.jpg',
            'description' => 'A low-maintenance plant ideal for homes and offices.',
            'care_guide' => 'Water every 10 days and place in partial sunlight.'
        ]);

        Plant::create([
            'name' => 'Rose',
            'category' => 'Outdoor',
            'price' => 199,
            'image' => 'rose.jpg',
            'description' => 'Beautiful flowering plant available in multiple colors.',
            'care_guide' => 'Requires 5–6 hours of sunlight and regular watering.'
        ]);

        Plant::create([
            'name' => 'Money Plant',
            'category' => 'Indoor',
            'price' => 249,
            'image' => 'moneyplant.jpg',
            'description' => 'Popular decorative plant believed to bring prosperity.',
            'care_guide' => 'Keep soil moist and avoid direct afternoon sunlight.'
        ]);

        Plant::create([
            'name' => 'Tulsi',
            'category' => 'Medicinal',
            'price' => 149,
            'image' => 'tulsi.jpg',
            'description' => 'Holy basil with medicinal and religious importance.',
            'care_guide' => 'Water daily and provide morning sunlight.'
        ]);
        Plant::create([
    'name' => 'Jasmine',
    'category' => 'Outdoor',
    'price' => 180,
    'image' => 'jasmine.jpg',
    'description' => 'Fragrant white flowers that bloom throughout the year.',
    'care_guide' => 'Needs full sunlight and regular watering.'
]);

Plant::create([
    'name' => 'Lavender',
    'category' => 'Outdoor',
    'price' => 350,
    'image' => 'lavender.jpg',
    'description' => 'Beautiful purple flowers with a calming fragrance.',
    'care_guide' => 'Requires full sunlight and well-drained soil.'
]);

Plant::create([
    'name' => 'Peace Lily',
    'category' => 'Indoor',
    'price' => 450,
    'image' => 'peacelily.jpg',
    'description' => 'Elegant indoor plant with white flowers and air-purifying qualities.',
    'care_guide' => 'Keep in indirect sunlight and water once a week.'
]);

Plant::create([
    'name' => 'Marigold',
    'category' => 'Outdoor',
    'price' => 120,
    'image' => 'marigold.jpg',
    'description' => 'Bright yellow and orange flowers perfect for gardens.',
    'care_guide' => 'Needs plenty of sunlight and moderate watering.'
]);

Plant::create([
    'name' => 'Orchid',
    'category' => 'Indoor',
    'price' => 650,
    'image' => 'orchid.jpg',
    'description' => 'A decorative flowering plant with long-lasting blooms.',
    'care_guide' => 'Keep in bright indirect light and water weekly.'
]);

Plant::create([
    'name' => 'Sunflower',
    'category' => 'Outdoor',
    'price' => 220,
    'image' => 'sunflower.jpg',
    'description' => 'Tall flowering plant known for its large yellow blooms.',
    'care_guide' => 'Requires full sunlight and regular watering.'
]);

Plant::create([
    'name' => 'Cactus',
    'category' => 'Indoor',
    'price' => 280,
    'image' => 'cactus.jpg',
    'description' => 'Low-maintenance succulent ideal for home decoration.',
    'care_guide' => 'Water sparingly and place in bright sunlight.'
]);

Plant::create([
    'name' => 'Hibiscus',
    'category' => 'Outdoor',
    'price' => 240,
    'image' => 'hibiscus.jpg',
    'description' => 'Flowering shrub with large colorful blossoms.',
    'care_guide' => 'Needs daily sunlight and regular watering.'
]);

Plant::create([
    'name' => 'Bonsai',
    'category' => 'Indoor',
    'price' => 850,
    'image' => 'bonsai.jpg',
    'description' => 'Miniature ornamental tree for indoor decoration.',
    'care_guide' => 'Requires indirect sunlight and careful watering.'
]);

Plant::create([
    'name' => 'Mint',
    'category' => 'Medicinal',
    'price' => 160,
    'image' => 'mint.jpg',
    'description' => 'Aromatic herb used in cooking and herbal remedies.',
    'care_guide' => 'Keep soil moist and provide partial sunlight.'
]);
    }
}