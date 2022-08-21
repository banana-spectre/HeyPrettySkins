<x-app-layout>
    <x-slot name="header"> </x-slot>

	<div class="container-fluid"> 
		<div class="row">
			<table>				
				<tr>
					<td><p id="dashboard">Hello, CEO.</p></td>
				</tr>
							
				<tr>
					<td>
							
                    <!--START OF RECENTLY ADDED PRODUCTS-->
						<table class="box">
							<tr>
								<td><p class="header">Recently Added Products</p></td>
							</tr>
							<tr>
								<td width="310px"><p class="name">Product Image</p></td>
								<td width="300px"><p class="name">Product Name</p></td>
								<td width="300px"><p class="name" style="text-align:center;">Product Price</p></td>
							</tr>																
							<tr>
								<td colspan="3"><hr></td>
							</tr>

                            @foreach ($productsRegisteredThisMonth as $item)
							<tr>
							    <td class="content" width="310px" style="padding-left: 60px;"><img src="{{ asset($item->product_image) }}"></td>
                                <td class="content" width="300px"><p>{{$item->product_name}}</p></td>								
								<td class="content" width="300px" style="text-align:center;"><p>Php {{$item->product_price}}</p></td>						
							</tr>
							<tr>
								<td colspan="3"><hr></td>
							</tr>
							@endforeach
						</table> 
					<!--END OF RECENTLY ADDED PRODUCTS-->

					<br>
					</td>				
				</tr>
			</table>
        </div>
    </div>

</x-app-layout>
