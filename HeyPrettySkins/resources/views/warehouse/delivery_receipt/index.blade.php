<x-app-layout>
    <x-slot name="header"></x-slot>

<div class="container-fluid"> 

            <table class="first-tablerow">
                <tr>
                    <td class="col-11"> <p id="products-info"><b>Delivery Receipts</p> </td>
                    <td class="col-1"> <a href="{{ url('/warehouse/UploadDeliveryReceipt') }}" title="Upload Delivery Receipt"><button id="add-button"> Upload </button></a></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
            </table>

            <table class="contain">
                <tr>
                    <td>
                        <table class="col-12" >
                            <tr id="second-tablerow">
                                <td width="375px" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Date</b></td>
                                <td width="680px" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Order No.s Included</b></td>
                                <td width="560px" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Delivery Receipt</b></td>
                            </tr>

                            <tr><td><br></td></tr>

                            <tr>
                                <td width="375px" class="product-info-col" style="padding-left:20px;">22 May 2022</td>
                                <td width="680px" class="product-info-col" style="padding-left:20px;">Order-007, Order-008</td>
                                <td width="560px" class="product-info-col" style="padding-left:20px;">DLVRECEIPT-004.pdf</td>
                            </tr> 

                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>

                            <tr><td></td></tr>
                        </table> 
                                            
                        <br>
                                        
                    </td>				
                    </tr>	

                </table>		

		    </div>
	    </div>
		
        <br><br>
</x-app-layout>