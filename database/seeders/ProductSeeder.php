<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Brown Short Taffeta Pants',
                'price' => '996000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/_dsc6188-1625900507.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 2,
                'name' => 'Beige Khaki Trousers Pants',
                'price' => '996000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/_dsc6223-1625900125.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'id' => 3,
                'name' => 'Leopard Prints Midi Silk Dress',
                'price' => '2496000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/_dsc3826-1625897288.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 4,
                'name' => 'Short Sleeves Silk Shirt',
                'price' => '996000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/dscf2016-3-1625282324.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 5,
                'name' => 'Black Leopard Midi Chiffon Dress',
                'price' => '996000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/dscf0267-1-1626143643.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 6,
                'name' => 'Sixdo Tshirt for man',
                'price' => '196000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/original/400ac5c5a24a57140e5b-1625283862.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 7,
                'name' => 'Atticus Blue Stripe Shirt 2',
                'price' => '996000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/z2635771940610_1926bb4e98fe76f4a3f011c9f2b5aeb8-1627105468.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 8,
                'name' => 'Bevis Check Shirt',
                'price' => '748000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/_dsc3909-1-1614312251.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 9,
                'name' => 'Rory Stripe Shirt 3',
                'price' => '423000',
                'thumbnail' => 'https://sixdo.vn/images/products/2020/large/vnq06063-1608953852.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
            [
                'id' => 10,
                'name' => 'Royal Rose T-Shirt 001',
                'price' => '196000',
                'thumbnail' => 'https://sixdo.vn/images/products/2021/large/4a042a7e8da978f721b8-1621563806.jpg',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),

            ],
        ]);

    }
}
