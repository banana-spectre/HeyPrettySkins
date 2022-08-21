<?php

namespace App\Http\Controllers\depot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\User;
use App\Models\Inventory;
use App\Models\Orders;
use DB;


class OrderController extends Controller
{
    
    public function index()
    {
       
        return view ('depot.order.index');
    }

    public function create()
    {
        $products = Products::all();

        return view ('depot.order.create')->with ('products', $products);
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $products = $request->input('products', []);
        $quantity = $request->input('quantities', []);
        $total_price = $request->input('total_price', []);;
        $order_total_price = $request->order_total_price;

        for ($i = 0; $i < count($products); $i++){
            if ($quantity[$i] != ''){
                $order = [
                    'user_id' => $user,
                    'sub_total' => $total_price,
                    'total' => $order_total_price,
                ];

                DB::table('order')->insert($order);
                $order->products()->attach($products[$i], ['quantity' => $quantities[$i]]);
            }
        }

        return redirect()->route('order.index');
    }
  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
