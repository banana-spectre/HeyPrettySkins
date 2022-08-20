<!-- VIEW PRODUCT REQUISITION FORMS -->
<div class="container-fluid"> 

        <table class="prod-req-first-tablerow">
            <tr>
                <td> <p id="prod-req"><b>Product Requisition Form</p> </td>
            </tr>
        </table>
        
        <br>

        <div>   
  
        <!--products-->      
        <table id="prod-req-head">
            <tr>
                <th></th>
            </tr>
        </table>

        <br>

            <table id="dataTable" class="prod-req-container">
                <tr>
                    <td><INPUT type="checkbox" name="chk"/>&emsp;</td>
                    <td><input type="text" placeholder="Product Name" name="product_details" id="product_details" class="form-control delivery-date">&emsp;</td>                                  
                    <td>
                        <select name="product_unit" id="product_unit" class="form-control" placeholder="Product Unit">
                            <option disabled selected hidden>Product Unit</option>
                            <option value="BOX">BOX</option>
                            <option value="PCS">PCS</option>
                        </select>
                        &emsp;
                    </td>                                  
                    <td><input type="number" placeholder="Quantity" name="product_details" id="product_details" class="form-control delivery-date">&emsp;</td>                                  
                    <td><input type="text" placeholder="Code" name="product_details" id="product_details" class="form-control delivery-date">&emsp;</td>                                                     
                    <td><br><br><br></td>
                </tr>
            </table>

            <br><br>

            <table class="buttons-container">
                <tr>
                    <td width="200px"><INPUT type="button" value="Add Product" title="Add Product" onclick="addRow('dataTable')" /></td>
                    <td width="10px">&emsp;</td>                                  
                    <td width="200px"><INPUT type="button" value="Delete Product" title="Delete Product" onclick="deleteRow('dataTable')" /></td>                                  
                    <td width="200px">&emsp;</td>                                  
                    <td width="800px">&emsp;</td>                                                     
                    <td width="10px"><INPUT type="submit" title="Submit Form" value="Submit Form" onclick="myFunction()"/></td>
                </tr>
            </table>


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