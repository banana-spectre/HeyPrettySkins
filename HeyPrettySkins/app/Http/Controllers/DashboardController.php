<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
            
            return view ('dashboard.admin_dashboard');
        }
        elseif(Auth::user()->hasRole('ceo')){
            return view ('dashboard.ceo_dashboard');
        }
        elseif(Auth::user()->hasRole('executive_secretary')){
            return view ('dashboard.executive_secretary_dashboard');
        }
        elseif(Auth::user()->hasRole('sales_manager')){
            return view ('dashboard.sales_manager_dashboard');
        }
        elseif(Auth::user()->hasRole('accounting_head')){
            return view ('dashboard.accounting_head_dashboard');
        }
        elseif(Auth::user()->hasRole('warehouse_manager')){
            return view ('dashboard.warehouse_manager_dashboard');
        }
        elseif(Auth::user()->hasRole('depot')){
            return view ('dashboard.depot_dashboard');
        }
    }

    
}
