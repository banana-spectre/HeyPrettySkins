<head>
    <link rel="shortcut icon" type="image/ico" href="{{ asset('pictures/icon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('HeyPrettySkins.css') }}">
</head>
<body>
    <!-- Primary Navigation Menu -->
    <div class="container-fluid"> 
			<div class="row align-items-center">
				<div class="col-12">				
					<table>
						<tr>
                            <!-- LOGO -->
							<td class="col-xxl-3.5 col-xl-9 col-lg-4.5 col-md-11 col-sm-10 col-xs-1 hps"><a href="{{ route('dashboard') }}"><img src="{{asset('pictures/logo.png')}}"></a></td>
							<td class="col-xxl-5.5 col-xl-0 col-lg-3 col-md-0 col-sm-1 col-xs-0.5"></td>
							<td class="col-xxl-3 col-xl-3 col-lg-3.5 col-md-1 col-sm-1 col-xs-0.5 acc">
								<!-- DROPDOWN -->
								<div class="dropdown">
									<button class="dropbtn"><img src="{{ asset('pictures/account-pic.png') }}"></button>
									<div class="dropdown-content">
										<div class="card">
											<center><img src="{{ asset('pictures/account-pic.png') }}" alt="admin" style="width:40%; padding-top:30px; padding-bottom:20px;"></center>
											<h2>{{ Auth::user()->name }}</h2>
											<p class="title">{{ Auth::user()->email }}</p>
                                            <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">

											<p><button> {{ __('Log Out') }}</button></p>
                                            </x-dropdown-link></form>

										</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>

            <br>

        <!--START OF SIDEBAR-->
		<div id="sidebar">
			<ul class="sidebar components"> <br>
				<li><x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
					<span class="icon"><img src="{{ asset('pictures/home.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Dashboard') }}</span>
				</x-nav-link></li>
				
				<!-- ADMIN -->
                @if (Auth::user()->hasRole('admin'))
				<br>	
				<li><x-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
					<span class="icon"><img src="{{ asset('pictures/products.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Products') }}</span>
				</x-nav-link></li>

				<br>	
				<li><x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
					<span class="icon"><img src="{{ asset('pictures/users.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Users') }}</span>
				</x-nav-link></li>
                @endif	

				<!-- WAREHOUSE MANAGER -->
				@if (Auth::user()->hasRole('warehouse_manager'))
				
				<br>	
				<li><x-nav-link :href="route('inventory.index')" :active="request()->routeIs('inventory.index')">
					<span class="icon"><img src="{{ asset('pictures/inventory.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Inventory') }}</span>
				</x-nav-link></li>


				<br>
				<li class="sub-menu-2"><x-nav-link>
					<span class="icon"><img src="{{ asset('pictures/transactions.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Transactions') }}
						<div class="sub-menu-contents-2">
							<!-- <x-nav-link :href="route('purchase_order_form.index')" :active="request()->routeIs('purchase_order_form.index')">
								<span class="components-text">{{ __('Purchase Order Form') }}</span>
							</x-nav-link>
							<x-nav-link :href="route('product_requisiton_form.index')" :active="request()->routeIs('product_requisiton_form.index')">
								<span class="components-text">{{ __('Product Requisition Form') }}</span>
							</x-nav-link> -->
							<!-- <x-nav-link :href="route('delivery_receipt.index')" :active="request()->routeIs('delivery_receipt.index')">
								<span class="components-text">{{ __('Delivery Receipt') }}</span>
							</x-nav-link> -->
						</div></span>
				</x-nav-link></li>
                @endif

				<!-- DEPOT -->
				@if (Auth::user()->hasRole('depot'))
				<br>	
				<li class="sub-menu-2"><x-nav-link>
					<span class="icon"><img src="{{ asset('pictures/order-requests.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Orders') }}</span>
						<div class="sub-menu-contents-2">
							<x-nav-link :href="route('order.create')" :active="request()->routeIs('order.create')">
								&emsp;{{ __('Create') }}
							</x-nav-link>
							<x-nav-link :href="route('order.index')" :active="request()->routeIs('order.index')">
								&emsp;{{ __('Status') }}
							</x-nav-link>
						</div>
				</x-nav-link></li>
			

				<br>
				<li class="sub-menu-2"><x-nav-link>
					<span class="icon"><img src="{{ asset('pictures/transactions.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Transactions') }}
						<div class="sub-menu-contents-2" style="top:32vh">
							<x-nav-link :href="route('invoice.index')" :active="request()->routeIs('invoice.index')">
								&emsp;{{ __('Invoice') }}
							</x-nav-link>
						</div></span>
				</x-nav-link></li>
                @endif

				<!-- CEO -->
				 @if (Auth::user()->hasRole('ceo'))
				 <br>	
				<li><x-nav-link :href="route('ceo_monthly_sales_report.index')" :active="request()->routeIs('ceo_monthly_sales_report.index')">
					<span class="icon"><img src="{{ asset('pictures/inventory.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('') }}</span>
				</x-nav-link></li>
                @endif

				<!-- ACCOUNTING HEAD -->
				@if (Auth::user()->hasRole('accounting_head'))
				<br>	
				<li><x-nav-link :href="route('acctng_invoice.index')" :active="request()->routeIs('acctng_invoice.index')">
					<span class="icon"><img src="{{ asset('pictures/products.png') }}" class="icon"></span>
					<span class="components-text">{{ __('Monthly Sales Report') }}</span>
				</x-nav-link></li>	
				
				<br>	
				<li><x-nav-link :href="route('purchase_order_form.index')" :active="request()->routeIs('purchase_order_form.index')">
					<span class="icon"><img src="{{ asset('pictures/inventory.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Proof of Payment') }}</span>
				</x-nav-link></li>
				
				<br>
				<li class="sub-menu-2"><x-nav-link>
					<span class="icon"><img src="{{ asset('pictures/transactions.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Transactions') }}
						<div class="sub-menu-contents-2" style="top:34vh">
							<!-- <x-nav-link :href="route('purchase_order_form.index')" :active="request()->routeIs('purchase_order_form.index')">
								&emsp;{{ __('Purchase Order Form') }}
							</x-nav-link> -->
							<x-nav-link :href="route('acctng_invoice.index')" :active="request()->routeIs('acctng_invoice.index')">
								&emsp;{{ __('Invoice') }}
							</x-nav-link>
						</div></span>
				</x-nav-link></li>
                @endif

				<!-- EXECUTIVE SECRETARY -->
				@if (Auth::user()->hasRole('executive_secretary'))
				<br>	
				<li><x-nav-link :href="route('exec_sec_order.index')" :active="request()->routeIs('exec_sec_order.index')">
					<span class="icon"><img src="{{ asset('pictures/order-requests.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Orders') }}</span>
				</x-nav-link></li>

				<!-- <br>
				<li class="sub-menu-2"><x-nav-link>
					<span class="icon"><img src="{{ asset('pictures/transactions.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Transactions') }}
						<div class="sub-menu-contents-2" style="top:23vh">
							<x-nav-link :href="route('store_issuance_voucher.index')" :active="request()->routeIs('store_issuance_voucher.index')">
								<span class="components-text">{{ __('Store Issuance Voucher') }}</span>
							</x-nav-link>						
						</div></span>
				</x-nav-link></li> -->
                @endif  

				<!-- SALES MANAGER -->
				@if (Auth::user()->hasRole('sales_manager'))
				<br>	
				<li><x-nav-link :href="route('sales_manager_order.index')" :active="request()->routeIs('sales_manager_order.index')">
					<span class="icon"><img src="{{ asset('pictures/order-requests.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Orders') }}</span>
				</x-nav-link></li>	

				<!-- <br>
				<li class="sub-menu-2"><x-nav-link>
					<span class="icon"><img src="{{ asset('pictures/transactions.png') }}" class="icon"></span>
					<span class="components-text">&emsp;{{ __('Transactions') }}
						<div class="sub-menu-contents-2" style="top:23vh">
							<x-nav-link :href="route('store_issuance_voucher.index')" :active="request()->routeIs('store_issuance_voucher.index')">
								<span class="components-text">{{ __('Store Issuance Voucher') }}</span>
							</x-nav-link>						
						</div></span>
				</x-nav-link></li> -->
				@endif			
                

			</ul>
		</div>
        <!--END OF SIDEBAR-->
    </div>
</body>