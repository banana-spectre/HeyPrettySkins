<?php

namespace App\Http\Controllers\Warehouse_Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Products;

class PDFController extends Controller
{
    public function getAllInventory()
    {
        $inventory_item = Inventory::all();
        return view('warehouse.inventory.view-pdf', compact('inventory_item'));
    }
}
