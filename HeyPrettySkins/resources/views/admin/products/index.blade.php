<x-app-layout>
    <x-slot name="header"> </x-slot>

    <div class="container-fluid"> 

        <table class="first-tablerow">
            <tr>
                <td class="col-11"> <p id="products-info"><b>Products Information</p> </td>
                <td class="col-1"> <a href="{{ route ('products.create') }}" title="Add New Product"><button id="add-button">+New</button></a> </td>
            </tr>
        </table>
        
        <table class="contain">
            <tr>
                <td>

                    <table class="col-12" >
                        <tr id="second-tablerow">
                            <th width="20px" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">#</th>
                            <th width="300px" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Product Image</th>
                            <th width="420px" class="product-info-col" style="padding-left:20px; color:white; font-size: 1.2vw;">Product Name</th>
                            <th width="300px" class="product-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Product Price</th>
                            <th width="300px" class="product-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Product Details</th>
                            <th width="153px" class="product-info-col" style="text-align:center; color:white; font-size: 1.2vw;">Actions</th>
                        </tr>

                        <tr><td><br></td></tr>
                        @foreach ($products as $product)
                        <tr>
                            <td width="20px" class="product-info-col" style="padding-left:20px; font-weight: bold;">{{ $loop->iteration }}</td>
                            <td width="300px" class="product-info-col" style="padding-left:20px;"><img src="{{ asset($product->product_image) }}"></td>
                            <td width="420px" class="product-info-col" style="padding-left:20px;">{{$product->product_name}}</td>
                            <td width="300px" class="product-info-col" style="text-align:center;">Php {{$product->product_price}}</td>
                            <td width="300px" class="product-info-col" style="text-align:center;">{{$product->product_details}}</td>            
                            <td width="153px" class="product-info-col">
                                <center>
                                <div class="col-sm-1">  
                                    <a class="view" href="{{ route('products.show', $product->id) }}" title="View Product" target="_self"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                                </div><br>
                                <div class="col-sm-1">
                                    <a class="view" href="{{ route('products.edit', $product->id) }}" title="Edit Product" target="_self"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
                                </div><br>
                                <div class="col-sm-1">
                                    <form method="POST" action="{{ route ('products.destroy', $product->id)  }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="del" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i aria-hidden="true"></i> Delete</button>
                                    </form>
                                </div>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6"><br><hr></td>
                        </tr>
                        @endforeach 
                    </table>  

                </td>
            </tr>        
        </table>
        {{ $products->links() }}
        <br><br>
    </div>
</x-app-layout>

