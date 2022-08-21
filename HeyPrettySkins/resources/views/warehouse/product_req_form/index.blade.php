<x-app-layout>
    <x-slot name="header"></x-slot>

<div class="container-fluid"> 

    <table class="first-tablerow">
        <tr>
            <td class="col-12"> <p id="products-info"><b>Product Requisition Form</p> </td>
        </tr>
    </table>
        
    <table  class="contain">
        <tr>
            <td><INPUT type="checkbox" name="chk"/>&emsp;</td>
            <td><input type="text" placeholder="Product Name" name="product_details" id="product_details" class="form-control delivery-date">&emsp;</td>                                  
            <td>
                <select name="product_unit" id="product_unit" class="form-control" placeholder="Product Unit">
                    <option disabled selected hidden>Product Unit</option>
                    <option value="BOX">BOX</option>
                    <option value="PCS">PCS</option>
                </select> &emsp;
            </td>                                  
            <td><input type="number" placeholder="Quantity" name="product_details" id="product_details" class="form-control delivery-date">&emsp;</td>                                  
            <td><input type="text" placeholder="Code" name="product_details" id="product_details" class="form-control delivery-date">&emsp;</td>                                                     
        </tr>
    </table>

    <table class="buttons-container">
        <tr>
            <td width="200px"></td>
            <td width="100px">&emsp;</td>                                  
            <td width="200px"><INPUT type="button" value="Delete Row" title="Delete Row" onclick="deleteRow('dataTable')"></td>                                  
            <td width="200px"><INPUT type="button" value="Add Row" title="Add Row" onclick="addRow('dataTable')"></td>                                  
            <td width="200px">&emsp;</td>                                                     
            <td width="10px"><INPUT type="submit" title="Submit" value="Submit" onclick="myFunction()"/></td>
        </tr>
    </table>

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
<br><br>
</x-app-layout>