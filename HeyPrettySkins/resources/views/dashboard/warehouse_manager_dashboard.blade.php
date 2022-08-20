<x-app-layout>
    <x-slot name="header"></x-slot>

<div class="container-fluid"> 
    <div class="row">

		<table>				
			<tr>
				<td><p id="dashboard">Hello, Warehouse Manager.</p></td>
			</tr>
						
			<tr>
				<td> 
                    <!--stocks overview--->
					<table class="box-product-list-1"> 
						<tr>
							<td colspan="3"><p class="header">Inventory Overview</p></td>
						</tr>	

						<tr>
							<td width="240px"><p class="name">Product Image</p></td>
							<td width="320px"><p class="name">Product Name</p></td>
							<td width="200px"><p class="name">Product Unit</p></td>
						</tr>
											
						<tr>
							<td colspan="3"><hr></td>
						</tr>
						@foreach ($products as $item)
						
						<tr>
							<td class="content"><p><img src="{{ asset($item->product_image) }}"></p></td>
							<td class="content"><p>{{$item->product_name}}</p></td>
							<td class="content"><p>{{$item->product_details}}</p></td>
						</tr> 

						<tr>
							<td colspan="3"><hr></td>
						</tr>
						@endforeach

						<tr><td></td></tr>
					</table> 

					<table class="box-product-list-2"> 

						<tr>
							<td><p class="header" style="color:transparent;">Inventory</p></td>
						</tr>	

						<tr>
							<td width="150px"><p class="name" style="text-align:center;">Stocks Left</p></td>
						</tr>

						<tr>
							<td><hr></td>
						</tr>
						@foreach ($total_qty as $item)
						<tr height="142px">
							<td class="overview">
								<p style="font-weight:bold; text-align:center;">{{ $item->total_qty}}</p></td>
						</tr> 
						
						<tr>
							<td><hr></td>
						</tr>
						@endforeach
						
						<tr><td></td></tr>
					</table>
                    <!--end of stocks overview--->
					<br>
				</td>				
			</tr>	
		</table>	
	</div>
</div>
		
<br><br>
</x-app-layout>

