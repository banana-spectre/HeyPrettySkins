<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;


class PDFController extends Controller
{
    public function getAllInventory()
    {
        $inventory = Inventory::all();
        return view('view-pdf',compact('inventory'));
    }

}
