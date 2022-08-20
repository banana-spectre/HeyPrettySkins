<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
                <td class="col-12"> <p id="order-products"><b>Order Products</p> </td>
            </tr>
        </table>
        
        <div>  

            <form action="{{ route('order.store') }}" method="post">
                    @csrf

                <table class="contain">
                    <tr id="second-tablerow">
                        <th width="60px" class="order-products-col-1">#</th>
                        <th width="500px" class="order-products-col-1">Product Name</th>
                        <th width="400px" class="order-products-col-1">Product Unit</th>
                        <th width="250px" class="order-products-col-1" style="text-align:center; padding-left:0px;">Price</th>
                        <th width="200px" class="order-products-col-1" style="text-align:center; padding-left:0px;">Quantity</th>
                        <th width="200px" class="order-products-col-1" style="text-align:center; padding-left:0px;">Total</th>
                    </tr>            
                    @foreach ($products as $item) 
                    <tr>
                        <td width="60px" class="order-products-col-2"><b>{{ $loop->iteration }}</b></td> 
                        <td width="500px" class="order-products-col-2">{{ $item->product_name }}</td>                                                                                 
                        <td width="400px" class="order-products-col-2">{{ $item->product_details }}</td>
                        <td width="250px" class="order-products-col-2" style="text-align:center; padding-left:0px;"><input type="hidden" class="product_price" value="{{ $item->product_price }}">Php {{ $item->product_price }}</td>                                  
                        <td width="100px" class="order-products-col-2" style="text-align:center; padding-left:0px;"><input type="number" placeholder="Quantity" onchange="subTotal()" class="order_qty" value="$value[order_qty]"></td>                                                     
                        <td width="200px" class="total_price" class="order-products-col-2" style="text-align:center; padding-left:0px;"></td>                                  
                    </tr>                   
                    @endforeach  
                </table>

                <table class="contain">
                    <tr id="total">
                        <th width="60px"></th>
                        <th width="500px"></th>
                        <th width="400px"></th>
                        <th width="300px"></th>
                        <th width="200px">Total:</th>
                        <th width="200px" id="order_total_price"></th>
                    </tr>
                    <tr><td><br></td></tr>
                </table>    

                <br><br>

                <table class="buttons-container">
                    <tr>
                        <th width="60px"></th>
                        <th width="500px"></th>
                        <th width="400px"></th>
                        <th width="300px"></th>
                        <th width="200px"></th>
                        <th width="200px"><INPUT type="submit" title="Submit Form" value="Submit Form" onclick="myFunction()"/></th>
                    </tr>
                </table>
                </form>

        <br>
        </div>
</div>

<script>
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[0].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					if(rowCount <= 1) {
						alert("Cannot delete all the rows.");
						break;
					}
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}
</script>

<script>
        function increment() {
        document.getElementById('demoInput').stepUp();
        }
        function decrement() {
            document.getElementById('demoInput').stepDown();
        }
</script>

<script>
    function myFunction() {
    let text = "Is everything correct?";
    if (confirm(text) == true) {
        text = "You pressed OK!";
    } else {
        text = "You canceled!";
    }
    document.getElementById("demo").innerHTML = text;
    }
</script>

<script>
   
    var otp=0;
    var product_price=document.getElementsByClassName('product_price');
    var order_qty=document.getElementsByClassName('order_qty');
    var total_price=document.getElementsByClassName('total_price');
    var order_total_price=document.getElementById('order_total_price');

    function subTotal()
    {
        otp=0;
        for(i=0;i<product_price.length;i++)
        {
            total_price[i].innerText=(product_price[i].value)*(order_qty[i].value);

            otp = otp + (product_price[i].value)*(order_qty[i].value);
        } 
        order_total_price.innerText = otp;
    }

    subTotal();

</script>

</x-app-layout>