<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function about()
    {
        return view('customer.home.aboutus');
    }
    public function index()
    {
        // Kiểm tra và lấy dữ liệu từ model hoặc service
        $product_best_rating = []; // Đảm bảo biến được khởi tạo và gán giá trị mặc định
        $products = []; // Đảm bảo biến được khởi tạo và gán giá trị mặc định

        // Nếu có dữ liệu thực tế, bạn cần lấy và gán giá trị cho các biến ở đây

        // Trả về view với các biến đã xử lý
        return view('customer.home.index', compact('product_best_rating', 'products'));
    }
}
