<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

    <center><img src="{{asset('pictures/logo.png')}}"></center>

    <br><br>

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

                        <tbody>
                        @foreach ($inventory_item as $item)
                        <tr>
                            <td class="sales-info" width="50px"><b>&emsp;{{ $loop->iteration }}</b></td>
                            <td class="sales-info" width="230px" style="padding-left:20px;">{{ $item->transac_date }}</td>
                            <td class="sales-info" width="200px" style="padding-left:20px;">{{ $item->area }}</td>
                            <td class="sales-info" width="200px" style="padding-left:20px;">{{ $item->code }}</td>
                            <td class="sales-info" width="435px" style="padding-left:20px;">{{ $item->products->product_name}}</td>
                            <td class="sales-info" width="100px" style="text-align:center;">{{ $item->type}}</td>
                            <td class="sales-info" width="230px" style="padding-left:20px;">{{ $item->best_before}}</td>
                            <td class="sales-info" width="200px" style="text-align:center;">{{ $item->qty}}</td>
                        </tr> 
                        <tr>
                            <td colspan="8"><br><hr><br></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>                   
                </td>
            </tr>        
        </table>


</div>


</x-app-layout>
