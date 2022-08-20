<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
            <td class="col-11"> <p id="title"><b>Inventory List Searching</p> </td>
                <td class="col-1"><a href="{{ route ('inventory.create') }}"><button id="add-button" name="add stocks" title="Edit Stocks"> In-Out </button></a></td>
            </tr>
        </table>

        <table id="search-bar">
            <tr>
                <form action="{{ url ('warehouse_manager/inventory/search') }}" method="get" enctype="multipart/form-data">
                @csrf
                    <td><input type="date" name="custom_date" id="currentDate" class="form-control delivery-date"></td>
                    <td width="270px"><input type="text" id="other" name="other" placeholder="other"></td>
                    <td width="50px"><button type="submit" id="add-button" name="search" title="Search">Search</button></td>
                </form>
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
                        @foreach($search as $item)
                        <tr>
                            <td class="sales-info" width="50px">&emsp;{{ $loop->iteration }}</td>
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
                        </table>                   
                </td>
            </tr>        
        </table>
        <br><br>

        <table id="download">
            <tr>
                <td><a href="{{ url ('warehouse_manager/inventory/view-pdf') }}"><button>Download Inventory List</button></a></td>
            </tr>
        </table>     
        <br>

</div>

    <script>
        var date = new Date();
        var currentDate = date.toISOString().slice(0,10);
        var currentTime = date.getHours() + ':' + date.getMinutes();

        document.getElementById('currentDate').value = currentDate;
        document.getElementById('currentTime').value = currentTime;
    </script>

</x-app-layout>
