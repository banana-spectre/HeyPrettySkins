<x-app-layout>
    <x-slot name="header"></x-slot>

<div class="container-fluid"> 

	<center>			
	<div class="view-user-container-1">
		<header id="close-button">
			<span onclick="window.location.href='/admin/users'".style.display='none' class="close-button display-topright"><img src="{{ asset ('pictures/close.png') }}" style="width:20px; padding-top:8px"></span>
		</header>
		<div class="view-user-container">							
			<h2 id="employees">USER CARD</h2>	
			<table style="border-top:1px solid #F42B6D">
				<tr>
					<td class="view-user-column">Name: <div class="view-user-column2"><br>{{ $user->name }}</div></td>
				<tr>
								
				<tr>
					<td class="view-user-column">Email: <div class="view-user-column2"><br>{{ $user->email }}</div></td>
				</tr>
								
				<tr>
					<td class="view-user-column">Role: <div class="view-user-column2"><br>
						{{ $user->roles->count() == 0 ? 'This user does not have any roles yet': ''}}
						@foreach ($user->roles as $role)
						{{ $role->display_name }}
						@endforeach
					</div></td>
				</tr>
								
				<tr>
					<td class="view-user-column"></td>
				</tr>
			</table>

		</div>
	</div>
    </center>

</div>
</x-app-layout>