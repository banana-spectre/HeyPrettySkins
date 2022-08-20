<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
                <td class="col-11"> <p id="title"><b>Your Orders:</p> </td>
            </tr>
        </table>
            
        <table class="contain">
            <tr>
                <td>
                    <table class="col-12">
                        <tr id="second-tablerow">
                            <th class="sales-name" width="50px">&emsp;#</th>
                            <th class="sales-name" width="230px" style="padding-left:20px;">Date</th>
                            <th class="sales-name" width="200px" style="padding-left:20px;">Area</th>
                            <th class="sales-name" width="200px" style="padding-left:20px;">Code</th>
                            <th class="sales-name" width="435px" style="padding-left:20px;">Product</th>
                            <th class="sales-name" width="100px" style="text-align:center;">InOut</th>
                            <th class="sales-name" width="230px" style="padding-left:20px;">BB</th>
                            <th class="sales-name" width="200px" style="text-align:center;">Quantity</th>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                  
                        <tr>
                            <td class="sales-info" width="50px">&emsp;</td>
                            <td class="sales-info" width="230px" style="padding-left:20px;"></td>
                            <td class="sales-info" width="200px" style="padding-left:20px;"></td>
                            <td class="sales-info" width="200px" style="padding-left:20px;"></td>
                            <td class="sales-info" width="435px" style="padding-left:20px;"></td>
                            <td class="sales-info" width="100px" style="text-align:center;"></td>
                            <td class="sales-info" width="230px" style="padding-left:20px;"></td>
                            <td class="sales-info" width="200px" style="text-align:center;"></td>
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
