<x-app-layout>
    <x-slot name="header"> </x-slot>

	<div class="container-fluid"> 
		<div class="row">
			<table>				
				<tr>
					<td><p id="dashboard">Hello, Sales Manager.</p></td>
				</tr>
							
					<tr>
						<td>

                    <!--START OF RECENTLY ADDED PRODUCTS-->
							<table class="box">
								<tr>
									<td><p class="header">Recently Added Products</p></td>
								</tr>

								<tr>
									<td colspan="3"></td>
								</tr>
                                 @foreach ($productsRegisteredThisMonth as $item)
								<tr>
								    <td class="content col-4"><img src="{{ asset($item->product_image) }}"></td>
                                    <td class="content col-4"><p>{{$item->product_name}}</p></td>								
									<td class="content col-4"><p>Php {{$item->product_price}}</p></td>
									
								</tr>
								<tr>
									<td colspan="3"><hr></td>
								</tr>
								@endforeach
							</table> 
							<br>
						</td>				
					</tr>
					<!--END OF RECENTLY ADDED PRODUCTS-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
