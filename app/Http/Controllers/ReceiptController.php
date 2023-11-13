<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt; // Make sure to import the Receipt model

class ReceiptController extends Controller
{
    public function index()
    {
        return view('receipt.all', [
            "title"  => "receipts",
            "receipts" => Receipt::all()
        ]);
    }

    public function show($receipt)
    {
        return view('receipt.detail', [
            "title" => "detail-receipt",
            "receipt" => Receipt::find($receipt)
        ]);
    }
}
