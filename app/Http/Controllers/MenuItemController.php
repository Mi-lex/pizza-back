<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;

class MenuItemController extends Controller
{
    public function list()
    {
        $menuItems = MenuItem::leftJoin('types', 'menu_items.type_id', '=', 'types.id')->select('menu_items.*', 'types.name as type')->get()->makeHidden(['type_id']);
        
        return response()->json($menuItems, 200)->header(
            "Access-Control-Allow-Origin", "*" 
        );
    }

    public function listOfType($type)
    {
       return MenuItem::ofType($type)->get(); 
    }
}
