<x-app-layout>
    <x-slot name="header"></x-slot>
<div class="container-fluid"> 
    <div class="row">
        <center>
        <div id="in-out-stocks-container">
            <p id="in-out-stocks">IN-OUT STOCKS</p>             
            <br>
            <form action="{{ route('inventory.store') }}" method="post">
                @csrf
                <table class="names">
                    <tr>
                        <td><label for="product_name"><b>Product Name</b></label> <br>
                            <select type="text" name="products_id" id="product_name" class="form-control" required>
                                @foreach ($products as $item)
                                <option value="{{ $item->id }}">{{ $item->product_name }}</option>
                                @endforeach
                            </select><br>
                        </td>

                        <td>&emsp;</td>

                        <td><label for="type"><b>Type</b></label> <br>
                            <select type="text" name="type" id="type" class="form-control" placeholder="Type" onchange="myFunction()">
                                <option value="in">In</option>
                                <option value="out">Out</option>
                            </select><br>
                        </td>

                        <td><label for="in_qty"><b>Quantity</b></label> <br> <input type="number" name="qty" id="qty" class="form-control" required></td>      
                    </tr>

                    <tr id="for_in">
                        <td><label for="code"><b>Code</b></label> <br> <input type="text" name="code" id="code" class="form-control" required></td>
                        <td>&emsp;</td>
                        <td><label for="area"><b>Area</b></label> <br> <input type="text" name="area" id="area" class="form-control" required></td>
                        <td style="padding-left:50px;"><center><input type="button" onclick="window.location.href='/warehouse_manager/inventory'" value="Close"></center></td>
                    </tr>


                    <tr id="date">
                        <td><label for="in_date"><b>Date</b></label> <br> <input type="date" name="transac_date" id="transac_date" class="form-control"></td>  
                        <td>&emsp;</td>
                        <td><label for="best_before"><b>Best Before</b></label> <br> <input type="date" name="best_before" id="best_before" class="form-control"> </td> 
                        <td><center><input type="submit" value="Update" class="btn btn-success"></center></td>
                    </tr>

                </table>
            </form><br>
        </div>
        </center>
  </div>
</div>

    <script>
        function myFunction()
        {
            var status = document.getElementByID("type");
            if(status.value == "out")
            {
                document.getElementByID("date").style.visibility = "hidden";
                document.getElementByID("for_in").style.visibility = "hidden";
            }
        }
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("best_before")[0].setAttribute('min', today);    
    </script>

</x-app-layout>