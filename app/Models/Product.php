<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'description',
        'price',
        'rating',
        'favorites',
        'category_id',
        'inventory_id',
        'discount_id',
        'size',
        'color',
        'quantity',
        'quantity_sold',
        'discount_price',
        'start_date',
        'end_date',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, "category_id");
    }
   
    protected $date = ["deleted_at"];
}
