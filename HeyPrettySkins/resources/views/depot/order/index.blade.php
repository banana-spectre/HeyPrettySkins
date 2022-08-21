<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
                <td class="col-12"> <p id="title"><b>Your Orders:</p> </td>
            </tr>
        </table>
            
        <table class="contain">
            <tr>
                <td>
                    <table class="col-12">
                        <tr id="second-tablerow">
                            <th class="sales-name" width="50rem">&emsp;#</th>
                            <th class="sales-name" width="400rem" style="padding-left:20px;">Order Number</th>
                            <th class="sales-name" width="350rem" style="padding-left:20px;">Date</th>
                            <th class="sales-name" width="300rem" style="padding-left:20px;">Total</th>
                            <th class="sales-name" width="400rem" style="padding-left:20px;">Status</th>
                            <th class="sales-name" width="100rem" style="padding-left:20px;">Action</th>
                        </tr>

                        <tr><td><br></td></tr>

                        
                        <tr>
                            <td class="sales-info" width="50rem"><b>&emsp;1</b></td>
                            <td class="sales-info" width="400rem" style="padding-left:20px;">003123</td>
                            <td class="sales-info" width="350rem" style="padding-left:20px;">July 1, 2022</td>
                            <td class="sales-info" width="300rem" style="padding-left:20px;">Php 12, 000</td>
                            <td class="sales-info" width="400rem" style="padding-left:20px;">----</td>
                            <td width="100rem" class="product-info-col">
                                <center>
                                <div class="col-sm-1"> <a class="view" href="#" title="View Product" target="_self"><i class="fa fa-eye" aria-hidden="true"></i>View</a></div>
                                </center>
                            </td>
                        </tr> 
                        <tr>
                            <td colspan="8"><br><hr><br></td>
                        </tr>
                
                    </table>                   
                </td>
            </tr>        
        </table>
        <br><br>   
        <br>

</div>

</x-app-layout>
