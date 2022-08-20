<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Products;
use App\Models\Inventory;
use DB;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
            
            $from = now()->startOfMonth();
            $to = now();

            $usersRegisteredThisMonth = User::whereBetween('created_at', [$from, $to])
                                    ->orderBy('created_at', 'DESC')->get();
            $productsRegisteredThisMonth = Products::whereBetween('created_at', [$from, $to])
                                    ->orderBy('created_at', 'DESC')->get();

            return view ('dashboard.admin_dashboard')
            ->with('usersRegisteredThisMonth', $usersRegisteredThisMonth)
            ->with('productsRegisteredThisMonth', $productsRegisteredThisMonth);
        }
        elseif(Auth::user()->hasRole('ceo')){
            $from = now()->startOfMonth();
            $to = now();
            
            $productsRegisteredThisMonth = Products::whereBetween('created_at', [$from, $to])
                                    ->get();

            return view ('dashboard.ceo_dashboard')
            ->with('productsRegisteredThisMonth', $productsRegisteredThisMonth);
        }
        elseif(Auth::user()->hasRole('executive_secretary')){
            $from = now()->startOfMonth();
            $to = now();
            
            $productsRegisteredThisMonth = Products::whereBetween('created_at', [$from, $to])
                                    ->get();

            return view ('dashboard.executive_secretary_dashboard')
            ->with('productsRegisteredThisMonth', $productsRegisteredThisMonth);
        }
        elseif(Auth::user()->hasRole('sales_manager')){
            $from = now()->startOfMonth();
            $to = now();
            
            $productsRegisteredThisMonth = Products::whereBetween('created_at', [$from, $to])
                                    ->get();

            return view ('dashboard.sales_manager_dashboard')
            ->with('productsRegisteredThisMonth', $productsRegisteredThisMonth);
        }
        elseif(Auth::user()->hasRole('accounting_head')){
            $from = now()->startOfMonth();
            $to = now();
            
            $productsRegisteredThisMonth = Products::whereBetween('created_at', [$from, $to])
                                    ->get();

            return view ('dashboard.accounting_head_dashboard')
            ->with('productsRegisteredThisMonth', $productsRegisteredThisMonth);
        }
        elseif(Auth::user()->hasRole('warehouse_manager')){

            $products = Products::all();
            $total_qty = DB::table('inventory')
                        ->select('products_id', 
                        DB::raw("SUM(CASE WHEN type = 'in' THEN qty ELSE 0 END) - SUM(CASE WHEN type = 'out' THEN qty ELSE 0 END) as total_qty"))
                        ->groupBy('products_id')
                        ->get()
                        ->keyBy('products_id');

            return view ('dashboard.warehouse_manager_dashboard')
            ->with('products', $products)->with('total_qty', $total_qty);
        }
        elseif(Auth::user()->hasRole('depot')){
            return view ('dashboard.depot_dashboard');
        }
    }

    
}
