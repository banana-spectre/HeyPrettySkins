<x-app-layout>
    <x-slot name="header"> </x-slot>

<!-- UPLOAD INVOICE -->
<div class="container-fluid">

    <center>
    <div class="invoice">
            <p id="invoice">INVOICE</p>

            <form action="" method="post">            

            <input type="hidden" name="id" id="id" id="id" />

            <table>
				<tr>
					<td><br>
						<label for="product_details">Date</label>
						<br>
						<input type="date" name="product_details" id="product_details" class="form-control delivery-date"></br>        
					</td>
				</tr>

				<tr>
					<td><br>
						<label for="invoice-no">Invoice Number</label>
						<br>
						<input type="text" name="invoice-no" id="invoice-no" class="invoice-no"></br>
					</td>
				</tr>

				
				<tr>
					<td><br>
						<label for="amount">Total</label>
						<br>
						<input type="number" name="amount" id="amount" class="amount"></br>
					</td>
				</tr>

				<tr>				
					<td><br>
						<label>Upload Invoice File</label>
						<br><br>
							<div style="border:1px solid #ccc; border-radius: 5px; background-color: white;w1 padding:10px 10px 10px 40px; margin-left:3px; width: 16vw; font-size: 0.9vw;">
								<input type="file" class="form-control" name="product_image" id="product_image">
							</div>
					</td>
				</tr>

				<tr>
					<td colspan=4 style="text-align: center;"><br>
						<input type="button" onclick="window.location.href='/accountinghead/Invoice'" value="Close">					
						<input type="submit" value="Submit" title="Confirm Details" class="btn btn-success" onclick="myFunction()">
					</td>
					
				</tr>
			</table>
			</form>
		

      </div>
      </center>
    </div>
    <br><br>

	<script>
		function myFunction() {
		let text = "Are the details correct?";
		if (confirm(text) == true) {
			text = "You pressed OK!";
		} else {
			text = "You canceled!";
		}
		document.getElementById("demo").innerHTML = text;
		}
	</script>
</x-app-layout>
