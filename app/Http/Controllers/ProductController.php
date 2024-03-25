<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProducts(Request $request, $id_categories = null)
    {
        if ($id_categories === null) {
            $id_categories = 1;
        }

        $products = DB::table('products')
            ->where('category_id', $id_categories)
            ->get();

        $categories = DB::table('categories')
            ->get();

        // dd($products);
        return view('customer/product/index', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        $products = Product::take(6)->get();

        return view('customer/product/detail', compact('product', 'products'));
    }
}
