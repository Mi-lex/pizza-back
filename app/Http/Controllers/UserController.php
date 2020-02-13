<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class UserController extends Controller
{
    public function orders($phone)
    {
        return Order::where('phone', '=', $phone)->get();
    }
}
