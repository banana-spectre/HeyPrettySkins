<x-app-layout>

<div class="container-fluid">
      <div class="row">
 
          <center>
 
          <div class=" col-5 add-product-container">
            <p id="add-product">ADD PRODUCT</p>  
 
              <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
              {!! csrf_field() !!}
 
        <table class="add-product-table">
          <tr>
            <td>
              <label for="product-name">Product Name</label>
              <br>
              <input type="text" name="product_name" id="product_name" class="form-control" required></br>
            </td>
 
            <td>
              <label for="product-name">Product Price</label>
              <br>
              <input type="number" name="product_price" id="product_price" class="form-control" required></br>
            </td>
          </tr>
 
          <tr>
            <td>
              <label for="product-name">Product Description</label>
              <br>
              <input type="text" name="product_description" id="product_description" class="form-control" required></br>
            </td>
 
            <td>
              <label for="product-details">Product Details</label>
              <br>
              <select name="product_details" id="product_details" class="form-control product-select" required>
                    <option value="Sold in a set">Sold in a set</option>
                    <option value="Sold by piece">Sold by piece</option>
              </select>
            </td>
          </tr>
 
          <tr>
            <td>
              <label>Upload Product Image</label>
              <br><br>
              <div style="border:1px solid #ccc; border-radius: 5px; background-color: white;w1 padding:10px 10px 10px 40px; width: 18vw;">
                <input type="file" class="form-control" name="product_image" id="product_image" required>
              </div>
              <br><br>
            </td>
 
            <td style="text-align:right">
              <input type="button" onclick="window.location.href='/admin/products'" value="Close">
              <input type="submit" value="Save" class="btn btn-success">
            </td>
          </tr>
        </table>
      </form>
        </div>
      </center>
    </div>
  </div>

  </x-app-layout>