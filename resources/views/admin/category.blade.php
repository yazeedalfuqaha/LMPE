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

        .input_color{
            color:#000;
        }

        .catabutto{

          
          display: inline-block;
                    outline: 0;
                    border: 0;
                    cursor: pointer;
                    background-color: blue !important;
                    border-radius: 10px;
                    padding: 8px 16px;
                    font-size: 16px;
                    font-weight: 600;
                    color: #fff;
                    border: 1px solid rgb(66, 153, 225);
                    line-height: 26px;
                
        }

        .center{
          margin : auto;
          width : 50%;
          text-align : center;
          margin-top : 30px;
          border : 3px solid white;

        }

        .center td, .center th {
        border: 1px solid #ddd;
        padding: 8px;
       
      }

      .center tr:nth-child(even){background-color: #000;}

      .center tr:hover {background-color: #000;}


      input[type=submit] {
  
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 14px;
        cursor: pointer;
      }

      input[type=text], select {
  width: 35%;
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

          @if(session()->has('deleted'))


          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

          {{session()->get('deleted')}}

          </div>


          @endif



          <div class="div_center">


            <h2 class="h2_font">Add Category</h2>


            <form action="{{url('add_category')}}" method="POST">

            @csrf

            <input type="text" name="category" class="input_color" placeholder="Write Category Name">
            <input type="submit"   class="catabutto"   name="submit" value="Add Category ">


            </form>



          </div>


          
          <table class="center">
            <tr>
              <td>Category Name</td>
              <td>Action</td>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data->category_name}}</td>
              <td> 

                 <a href="{{route('delete_category' , $data->id)}}" class="btn btn-danger">Delete</a>
                
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