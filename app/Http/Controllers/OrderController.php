<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
    public function list()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => ['required', 'string', 'min:4'],
            'phone' => ['required', 'numeric', 'digits_between:4, 12'],
            'bill' => ['required', 'numeric'],
            'cartItems' => ['required', 'array', 'min:1'],
        ]);

        $order = Order::create([
            'phone' => $request->phone,
            'address' => $request->address,
            'bill' => $request->bill,
        ]);

        $orderItems = [];

        foreach ($request->cartItems as $item) {
            $orderItems[] = new OrderItem([
                'menu_item_id' => $item['id'],
                'quantity' => $item['quantity']
            ]);
        };

        $order->orderItems()->saveMany($orderItems);

        return response()->json(['success' => true], 200);
    }
}
