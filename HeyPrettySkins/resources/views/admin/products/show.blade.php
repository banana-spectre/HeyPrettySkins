<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
                    <center>			
				<div class="view-products-container-1">
					<header class="view-products-container">
						<span onclick="window.location.href='/admin/products'".style.display='none' class="button display-topright"><img src="{{ asset('pictures/close.png') }}" style="width:20px; padding-top:8px; cursor:pointer"></span>
					</header>
						<div class="view-products-container">
							
							<h2 id="products">Products</h2>	

							<table style="border-top:1px solid #F42B6D">
								<tr>
									<td class="view-products-column">Name: <div class="view-products-column2"><br>{{ $product->product_name}}</div></td>
								<tr>
								
								<tr>
									<td class="view-products-column">Details: <div class="view-products-column2"><br>{{ $product->product_details }}</div></td>
								</tr>
								<tr>
									<td class="view-products-column">Price: <div class="view-products-column2"><br>Php {{ $product->product_price }}</div></td>
								</tr>
                                <tr>
									<td class="view-products-column">Description: <div class="view-products-column2"><br>{{ $product->product_description }}</div></td>
								</tr>
							</table>

						</div>
				</div>
			</div>
			</div>
      </center>
      </div>

    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>