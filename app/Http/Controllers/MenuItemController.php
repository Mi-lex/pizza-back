<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;

class MenuItemController extends Controller
{
    public function list()
    {
        return MenuItem::all();
    }

    public function listOfType($type)
    {
       return MenuItem::ofType($type)->get(); 
    }
}
