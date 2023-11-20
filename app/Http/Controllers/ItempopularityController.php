<?php

namespace App\Http\Controllers;

use App\Models\itempopularity;
use Illuminate\Http\Request;

class ItempopularityController extends Controller
{
    public function index()
    {
        return view('itempop.all', [
            "title"  => "itempopularities",
            "itempopularities" => itempopularity::all()
        ]);
    }

    public function show($itempop)
    {
        return view('itempop.detail', [
            "title" => "detail-itempopularity",
            "itempop" => itempopularity::find($itempop)
        ]);
    }
}
