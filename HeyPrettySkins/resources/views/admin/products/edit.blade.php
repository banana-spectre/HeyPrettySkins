<x-app-layout>

<center>

<div class="edit-product-container">
  <p id="edit-product">EDIT PRODUCT</p>		

  <form action="{{ route ('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />

    <br>
    <label for="product-name">Product Name</label>
    <br>
    <input type="text" name="product_name" id="product_name" value="{{$product->product_name}}" class="form-control"></br>
    
    <br>
    <label for="price">Product Price</label>
    <br>
    <input type="text" name="product_price" id="product_price" value="{{$product->product_price}}" class="form-control"></br>

    <br>
    <label for="product-description">Product Description</label>
    <br>
    <input type="text" name="product_description" id="product_description" value="{{$product->product_description}}" class="form-control"></br>

    <br>
    <label for="product-details">Product Details</label>
    <br>
    <select name="product_details" id="product_details" value="{{$product->product_details}} " class="form-control edit-select">
          <option value="Sold in a set">Sold in a set</option>
          <option value="Sold by piece">Sold by piece</option>
          </br>
    </select>
        
    
    </br></br>
    <label>Upload Product Image</label>
    </br>
    <br>
    <div style="border:1px solid #ccc; border-radius: 5px; background-color: white; width: 17.2vw">
    <input type="file" class="form-control" name="product_image" id="product_image">
    </div>
    <br>
    <br>
    
    <input type="button" onclick="window.location.href='/admin/products'" value="Close">
    <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

    <br>
</div>

</x-app-layout>