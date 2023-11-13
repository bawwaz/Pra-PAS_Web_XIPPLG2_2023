<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // Make sure to import the Item model

class ItemController extends Controller
{
    public function index()
    {   
        return view('item.all', [
            "title" => "items",
            "items" => Item::all() // Change "Item" to "items"
        ]);
    }

    public function show($item)
    {
        return view('item.detail', [
            "title" => "detail-item",
            "item" => Item::find($item)
        ]);
    }
}
