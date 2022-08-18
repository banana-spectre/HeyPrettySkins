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
                    Users page!
                    <div class="row">

                    <center>			
				<div class="view-user-modal-content">
					<header class="view-user-container">
						<span onclick="window.location.href='/employees'".style.display='none' class="button display-topright"><img src="{{ asset ('pictures/close.png') }}" style="width:20px; padding-top:8px"></span>
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
									<td class="view-user-column"></td>
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