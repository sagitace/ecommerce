<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')

  <style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .font_size{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .text_color{
        color:black;
        padding-bottom: 20px;
    }
    label{
        display:inline-block;
        width: 200px;
    }
    .div_design{
        padding-bottom: 15px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
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

            <h1 class="font_size">Add Product</h1>

            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="div_design">
                <label for="">Product Name: </label>
                <input class="text_color" type="text" name="title" placeholder="Write a name" required="">
            </div>

            <div class="div_design">
                <label for="">Product Description: </label>
                <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
            </div>

            <div class="div_design">
                <label for="">Product Price: </label>
                <input class="text_color" type="number" name="price" placeholder="Write the price" required="">
            </div>

            <div class="div_design">
                <label for="">Price Discount: </label>
                <input class="text_color" type="number" name="discount" placeholder="Write price discount">
            </div>

            <div class="div_design">
                <label for="">Product Quantity: </label>
                <input class="text_color" type="number" min="0" name="quantity" placeholder="Write product quantity" required="">
            </div>

            <div class="div_design">
                <label for="">Product Category: </label>
                <select class="text_color" name="category" id="" required="">
                <option value="" selected="">Select category</option>

                    @foreach($category as $category)

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                    @endforeach

                </select>
            </div>

            <div class="div_design">
                <label for="">Upload product image: </label>
                <input class="text_color" type="file" name="image" required="">
            </div>

            <div class="div_design">

                <input type="submit" value="Add Product" class="btn btn-primary">
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
