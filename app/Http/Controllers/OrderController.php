<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function OrderСomment(CommentRequest $request, Order $order)
    {
        $order->comment = $request->comment;
        $order->save();
        return redirect()->route('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        if (Order::where('user_id', Auth::id())->where('course_id', $request->course_id)->first()) {
            return back()->withErrors(['course_id' => 'Вы уже записаны на этот курс'])->withInput();
        }

        Order::create(array_merge($request->all(), ['user_id' => Auth::id()]));
        return redirect()->route("index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->status = $request->status;
        $order->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('index');
    }
}
