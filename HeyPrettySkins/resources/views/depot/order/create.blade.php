<x-app-layout>
    <x-slot name="header"> </x-slot>

<div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
                <td class="col-12"> <p id="users-info"><b>Order Products</p> </td>
            </tr>
        </table>
        
        <form action="{{ route('order.store') }}" method="post">
                @csrf

            <table class="contain">
            <tr>
                <td>
                    <table class="col-12">
                        <tr id="second-tablerow">
                            <th width="40rem" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">#</th>
                            <th width="450rem" class="users-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Product Name</th>
                            <th width="200rem" class="users-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Product Unit</th>
                            <th width="300rem" class="users-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Price</th>
                            <th width="300rem" class="users-info-col" style="text-align:center; color:white; font-size: 1.2vw;">QTY</th>
                            <th width="200rem" class="users-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Total</th>
                        </tr>            
                        @foreach ($products as $item) 
                        <tr>
                            <td width="40rem" class="users-info-col" style="padding-left:20px;"><b>{{ $loop->iteration }}</b></td> 
                            <td width="500rem" class="users-info-col" style="padding-left:20px;">{{ $item->product_name }}</td>                                                                                 
                            <td width="200rem" class="users-info-col" style="text-align:center;">{{ $item->product_details }}</td>
                            <td width="300rem" class="users-info-col" style="text-align:center;"><input type="hidden" class="product_price" value="{{ $item->product_price }}">Php {{ $item->product_price }}</td>                                  
                            <td width="300rem" class="users-info-col" style="text-align:center;"><input type="number" placeholder="Quantity" onchange="subTotal()" class="order_qty" value="$value[order_qty]"></td>                                                     
                            <td width="200rem" class="total_price" class="users-info-col" style="text-align:center;"></td>                                  
                        </tr>
                        
                        @endforeach  
                    </table>

                    <table class="contain">
                        <tr>
                            <th width="40rem"></th>
                            <th width="500rem"></th>
                            <th width="200rem"></th>
                            <th width="300rem"></th>
                            <th width="300rem" class="users-info-col" style="text-align:right; font-size: 1.4vw;">Total:</th>
                            <th width="200rem" id="order_total_price" class="users-info-col" style="text-align:right; font-size: 1.4vw;"></th>
                        </tr>
                        <tr><td><br></td></tr>
                    </table>    
                    <br>
                </td>
            </tr>
            </table>
            <br>
            <table>
                <tr>
                    <th width="40rem"></th>
                    <th width="500rem"></th>
                    <th width="200rem"></th>
                    <th width="300rem"></th>
                    <th width="300rem"></th>
                    <th width="200rem"><INPUT id="add-button" type="submit" title="Submit" value="Submit" onclick="myFunction()"/></th>
                </tr>
            </table>
        </form>
<br>
</div>

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
