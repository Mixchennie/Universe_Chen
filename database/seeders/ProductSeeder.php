<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Lặp 10 lần để tạo 10 bản ghi dữ liệu mẫu
         for ($i = 0; $i < 10; $i++) {
            // Sử dụng factory để tạo một sản phẩm với giá trị category_id ngẫu nhiên từ 1 đến 5
            Product::factory()->create([
                'category_id' => rand(1, 5)
            ]);
         }
    }
}
