<x-app-layout>
    <x-slot name="header"> </x-slot>
        <div class="container-fluid"> 
			<div class="row">

			<table>
				
				<tr>
					<td><p id="dashboard">Hello, Depot.</p></td>
				</tr>
						
				<!--balance overview--->
				<tr>
					<td> 
						<br><br>
						<table class="box"> 
							<tr>
								<td><p class="header">Outstanding Balance</p></td>
							</tr>	
				
							<tr>
								<td width="180px"><p class="name">Order Number</p></td>
								<td width="280px"><p class="name">Date</p></td>
								<td width="200px"><p class="name">Time</p></td>
								<td width="150px"><p class="name">Balance</p></td>
							</tr>
							
							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr height="60px">
									<td class="overview"><p><a href="#">Order-001</a></p></td>
									<td class="overview"><p>29 April 2022</p></td>
									<td class="overview"><p style="margin-left:35px;">6:17pm</p></td>
									<td class="overview"><p style="margin-left:30px;">Php 6,300</p></td>
							</tr> 

							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr height="60px">
									<td class="overview"><p><a href="#">Order-000</a></p></td>
									<td class="overview"><p>28 April 2022</p></td>
									<td class="overview"><p style="margin-left:35px;">5:02pm</p></td>
									<td class="overview"><p style="margin-left:30px;">Php 4,800</p></td>
							</tr> 

							<tr>
								<td colspan="4"><hr></td>
							</tr>
							
							<tr height="60px">
									<td class="overview"></td>
									<td class="overview"></td>
									<td class="overview"><p style="margin-left:35px; font-weight: bold; color:#F42B6D;">Total</p></td>
									<td class="overview"><p style="margin-left:30px; font-weight: bold; color:#F42B6D;">Php 11,100</p></td>
							</tr> 
						
							<tr><td></td></tr>
						</table> 
				
						<br>			
				</td>				
				</tr>		
				<!--end of balance--->

				<!--requests overview--->
				<tr>
					<td>
						<br><br>
						<table class="box"> 
							<tr>
								<td><p class="header">Requests Overview</p></td>
							</tr>	

							<tr>
								<td width="180px"><p class="name">Order Number</p></td>
								<td width="280px"><p class="name">Date</p></td>
								<td width="200px"><p class="name">Time</p></td>
								<td width="150px"><p class="name">Status</p></td>
							</tr>
											
							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr height="60px">
								<td class="overview"><p><a href="#">Order-004</a></p></td>
								<td class="overview"><p>22 May 2022</p></td>
								<td class="overview"><p style="margin-left:35px;">5:02pm</p></td>
								<td class="overview"><p style="margin-left:30px;">---</p></td>
							</tr> 

							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr height="60px">
								<td class="overview"><p><a href="#">Order-003</a></p></td>
								<td class="overview"><p>21 May 2022</p></td>
								<td class="overview"><p style="margin-left:35px;">9:04am</p></td>
								<td class="overview"><p style="margin-left:30px;">Shipped</p></td>
							</tr> 

							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr height="60px">
								<td class="overview"><p><a href="#">Order-002</a></p></td>
								<td class="overview"><p>20 May 2022</p></td>
								<td class="overview"><p style="margin-left:35px;">11:02pm</p></td>
								<td class="overview"><p style="margin-left:30px;">Waitlisted</p></td>
							</tr> 

							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr height="60px">
								<td class="overview"><p><a href="#">Order-001</a></p></td>
								<td class="overview"><p>20 May 2022</p></td>
								<td class="overview"><p style="margin-left:35px;">10:02pm</p></td>
								<td class="overview"><p style="margin-left:30px;">Shipped</p></td>
							</tr> 

							<tr>
								<td colspan="4"><hr></td>
							</tr>

							<tr><td></td></tr>
						</table> 
									
						<br>
								
					</td>				
				</tr>	
				<!--end of requests--->

			</table>		

		</div>
		</div>
		
		<br><br>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script></body>

    </div>
</x-app-layout>
