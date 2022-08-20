<?php

namespace App\Http\Controllers\Warehouse_Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Products;

class InventoryController extends Controller
{

    public function index()
    {
        $inventory = Inventory::all();
        return view ('warehouse.inventory.index')->with('inventory', $inventory);
    }

    public function create()
    {
        $products = Products::all();

        return view('warehouse.inventory.create')->with ('products', $products);
    }

    public function store(Request $request)
    {
        $request_data = $request->all();
        Inventory::create($request_data);

        return redirect()->route('inventory.index')->with('status', 'Record Added!');

    }

    public function show($id)
    {
        $inventory = Inventory::all();
        $product_name = Products::where('id', $id)->value('product_name');

        return view('warehouse.inventory.show')->with('inventory', $inventory);
    }

    public function edit($id)
    {
        $inventory = Inventory::find('$id');

        return view('warehouse.inventory.edit')->with('inventory', $inventory);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Inventory::destroy($id);
        return redirect()->route('inventory.index')->with('flash_message', 'Inventory Record deleted!');
    }

    public function search(Request $request)
    {

        $other = $request->input('other');
        $transac_date = $request->input('transac_date');

        if (!empty($request->input('other'))) {
            $search = Inventory::with('products')
                ->whereHas('products', function ($query) use ($other) {
                return $query->where('product_name', 'LIKE', '%'.$other.'%');
                })
                ->orWhere('area', 'LIKE', '%'.$other.'%')
                ->orWhere('code', 'LIKE', '%'.$other.'%')
                ->orWhere('type', 'LIKE', '%'.$other.'%')
                ->orWhere('qty', 'LIKE', '%'.$other.'%')
                ->get();

                return view('warehouse.inventory.search', compact('search'));
        }
                
        else {
            $search = Inventory::with('products')
            ->whereDate('transac_date', '=', $transac_date)->get();

            return view('warehouse.inventory.search', compact('search'));
        }

    }

}
