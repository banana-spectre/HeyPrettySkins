<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Products;
use DB, Session, Hash, Input;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::paginate('10');
        return view ('admin.products.index')->with('products',$products);
    }

    public function create()
    {
        return view ('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request_data = $request->all();
        $file_name = time() . $request->file('product_image')->getClientOriginalName();
        $path = $request->file('product_image')->storeAs('product_image',$file_name,'public');
        $request_data["product_image"] = '/storage/'.$path;
        Products::create($request_data);
        
        return redirect()->route('products.index');
        
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view ('admin.products.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view ('admin.products.edit')->with('product', $product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $products = Products::find($id);

        $input = $request->all();

        $file_name = time() . $request->file('product_image')->getClientOriginalName();
        $path = $request->file('product_image')->storeAs('product_image',$file_name,'public');
        $input["product_image"] = '/storage/'.$path;

        $products->update($input);

        return redirect()->route('products.show', $id);
    }

    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();

        Session::flash('message', 'Successfully deleted the product!');
        return redirect()->route('products.index');

    }
}
