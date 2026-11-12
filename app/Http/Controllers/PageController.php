<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function OrderAddPage()
    {
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('OrderAddPage', compact('courses'));
    }

    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 'admin') {
                $orders = Order::orderBy('created_at', 'desc')->with('course', 'user')->get();
                return view('index', compact('orders'));
            } else {
                $myOrders = Order::where('user_id', Auth::id())->orderBy('created_at', 'desc')->with('course')->get();
                return view('index', compact('myOrders'));
            }
        } else {
            return view('index');
        }
    }

    public function regPage()
    {
        return view('registration');
    }
}
