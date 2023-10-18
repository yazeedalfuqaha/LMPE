<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>

        .center{
            margin:auto;
            width:50%;
            border:2px solid #fff;
            text-align:center;
            margin-top:40px;
        }

        .font_size{

            text-align:center;
            padding-top : 20px;
            font-size : 40px;

        }

        .img_size{
            width:150px;
            height:150px;
        }

        .th_color{

            background:skyblue;
        }

        .th_deg{
            padding:30px;
        }






    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial nav -->
    @include('admin.nav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <h2 class="font_size">All Products</h2>

          <table class="center">

          <tr class="th_color">

          <th class="th_deg">Product Title</th>
          <th class="th_deg">Description</th>
          <th class="th_deg">Quantity</th>
          <th class="th_deg">Category</th>
          <th class="th_deg">Price</th>
          <th class="th_deg">Discount Price</th>
          <th class="th_deg">image</th>

          </tr>



          @foreach($product as $product)
          <tr>


          <td>{{$product->title}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->category}}</td>
          <td>{{$product->price}}$</td>
          <td>{{$product->discount_price}}$</td>
          <td>

          <img src="/product/{{$product->image}}" class="img_size">
          </td>

          </tr>

          @endforeach

          </table>

          </div>
          </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>