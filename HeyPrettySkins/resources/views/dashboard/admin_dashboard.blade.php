<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in Admin!
                </div>
                <!--START OF RECENTLY ADDED USERS-->
							<table class="box">							
								<tr>
									<td><p class="header">Recently Added Users</p></td>
								</tr>
					
								<tr>
									<td width="240px"><p class="name">Full Name</p></td>
									<td width="200px"><p class="name">Email</p></td>
									<td width="150px"><p class="name">Role</p></td>
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
