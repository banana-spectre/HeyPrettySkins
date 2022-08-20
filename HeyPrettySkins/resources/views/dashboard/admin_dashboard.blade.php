<x-app-layout>
    <x-slot name="header"> </x-slot>

	<div class="container-fluid"> 
		<div class="row">
			<table>				
				<tr>
					<td><p id="dashboard">Hello, Admin.</p></td>
				</tr>
							
				<tr>
					<td> 
						<tr>
							<td>
								<!--START OF RECENTLY ADDED USERS-->
								<table class="box">							
									<tr>
										<td colspan="3"><p class="header">Recently Added Users</p></td>
									</tr>

									<tr>
										<td width="220px"><p class="name">Full Name</p></td>
										<td width="190px"><p class="name">Email</p></td>
										<td width="180px"><p class="name">Role</p></td>
									</tr>
																
									<tr>
										<td colspan="3"><hr></td>
									</tr>

									@foreach ($usersRegisteredThisMonth as $item)
										@foreach($item->roles as $role)
									<tr height="60px">
										<td class="overview"><p>{{$item->name}}</p></td>
										<td class="overview"><p>{{$item->email}}</p></td>
										<td class="overview"><p>{{$role->display_name}}</p></td>
									</tr> 										
									<tr>
										<td colspan="3"><hr></td>
									</tr>
										@endforeach
									@endforeach
								</table>
								<!-- END OF RECENTLY ADDED USERS-->
								<br><br>
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
										<td class="content" width="300px"><p style="text-align:center;">Php {{$item->product_price}}</p></td>										
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
					</td>
				</tr>
					
			</table>
		</div>
	</div>
		
	<br><br>
</x-app-layout>
