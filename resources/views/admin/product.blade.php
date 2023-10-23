<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
          .div_center{
            text-align : center;
            padding-top : 40px;
        }

        .h2_font{
            font-size : 40px;
            padding-bottom : 40px;
        }

        .text_color{
            color:#000;
        }

        lable{
            
            display: inline-block;
            width: 200px ;
            margin-right:20%
            
            
        }

        .div_center{
            padding-bottom : 5px;
        }


        input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          
        }

        input[type=submit] {
          
          background-color: blue;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=number], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
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
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

            </div>

            @endif



          <div class="div_center">


          <h2 class="h2_font">Add Product</h2>

          <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

          @csrf


          <div class="parent">


          <div class="dev_design">

          <lable> </lable>
          <input type="text" name="title" class="text_color" placeholder="Product Title" required="">
          </div>

          <div class="div_center">

            <lable> </lable>
            <input type="text" name="description" class="text_color" placeholder="Product Description" required="">
            </div>

            <div class="div_center">

            <lable></lable>
            <input type="number" name="price" class="text_color" placeholder="Product Price" required="">
            </div>

           

            <div class="div_center">

            <lable> </lable>
            <input type="number" name="dis_price" class="text_color" placeholder=" Discount_Price" >
            </div>

            <div class="div_center">

            <lable></lable>
            <input type="number" name="quantity" class="text_color" placeholder="Write a quantity" min="0" required="">
            </div>

           
            <div class="div_center">
            <lable> </lable>
            <select class="text_color" name="category" required="">
              
                <option value="" selected="">Add Category</option>

                @foreach($category as $category )
                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                @endforeach
            </select>
            </div>

            <div class="div_center">

            <lable>Product Image: </lable>
            <input type="file" name="image" required="">
            </div>

            <div class="div_center">

           
            <input type="submit" value="Add Product"  class="subbutto">

            </div>

            </div>
            

            </form>


         



          </div>


         


            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>