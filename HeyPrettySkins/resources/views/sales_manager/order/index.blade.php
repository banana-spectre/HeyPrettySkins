<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

    <table class="first-tablerow">
        <tr>
            <td class="col-12"> <p id="products-info"><b>Order Requests</p> </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
    </table>

    <table class="contain">
        <tr>
            <td>
                <table class="col-12">
                    <tr id="second-tablerow">
                        <td width="400rem" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Order Number</b></td>
                        <td width="400rem" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Date</b></td>
                        <td width="400rem" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Total</b></td>
                        <td width="300rem" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;"><b>Status</b></td>
                    </tr>

                    <tr><td><br></td></tr>

                    <tr>
                        <td width="400rem" class="product-info-col" style="padding-left:20px;">Order-004</td>
                        <td width="400rem" class="product-info-col" style="padding-left:20px;">22 May 2022</td>
                        <td width="400rem" class="product-info-col" style="padding-left:20px;">Php 10,890</td>
                        <td width="300rem" class="product-info-col">
                            <select name="product_details" id="product_details" class="form-control">
                                <option value="---">---</option>
                                <option value="Shipped">Accepted</option>
                                <option value="Waitlisted">Not Accepted</option>
                            </select>
                        </td>
                    </tr> 

                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>

                    <tr><td></td></tr>
                </table>                                     
            </td>				
        </tr>	
    </table>
                <!--end of requests--->

</div>
		
<br><br>
</x-app-layout>