<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Lấy tất cả các mục trong giỏ hàng
        $carts = ShoppingCart::all()->where("user_id", Auth::user()->id);
        // Trả về view hiển thị giỏ hàng
        return view('customer/cart/index', compact('carts'));
    }

    public function add(Request $request)
    {
        // Xử lý thông tin từ request và tạo một mục giỏ hàng mới
        $item = new ShoppingCart([
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'product_id' => $request->input('product_id'),
            'user_id' => $request->input('user_id'),
        ]);

        // Lưu mục vào cơ sở dữ liệu
        $item->save();

        // Chuyển hướng trở lại trang giỏ hàng
        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function update(Request $request, $itemId)
    {
        // Tìm mục giỏ hàng theo ID
        $item = ShoppingCart::findOrFail($itemId);

        // Cập nhật thông tin mục giỏ hàng
        $item->quantity = $request->input('quantity');
        // $item->price = $request->input('price');
        $item->save();

        // Chuyển hướng trở lại trang giỏ hàng
        return redirect()->route('cart.index')->with('success', 'Giỏ hàng đã được cập nhật');
    }

    public function remove($itemId)
    {
        // Tìm mục giỏ hàng theo ID và xóa
        $item = ShoppingCart::findOrFail($itemId);
        $item->delete();

        // Chuyển hướng trở lại trang giỏ hàng
        return redirect()->route('cart.index')->with('success', 'Mục giỏ hàng đã được xóa');
    }

    public function clear()
    {
        // Xóa tất cả các mục giỏ hàng
        ShoppingCart::truncate();

        // Chuyển hướng trở lại trang giỏ hàng
        return redirect()->route('cart.index')->with('success', 'Giỏ hàng đã được xóa');
    }
}