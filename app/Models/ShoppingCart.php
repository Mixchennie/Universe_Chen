<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $table = 'shopping_carts';

    // Các trường cho phép gán dữ liệu
    protected $fillable = ['color', 'size', 'quantity', 'price', 'product_id', 'user_id'];

    // Các quan hệ tương ứng (nếu có)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}