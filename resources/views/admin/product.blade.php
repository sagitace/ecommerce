<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')

  <style type="text/css">

    .font_size{
        font-size: 20px;
        font-weight: 800;
    }


    .text_color{
        color:black;
        padding-bottom: 20px;
    }
    label{
        display:inline-block;
        width: 200px;
        padding-left: 10px;
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

    <form action="{{ route ('create_product')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="card mt-5">

            <h1 class="font_size cart-title text-center mt-4 mb-1">Add Product</h1>
            <p class="text-center text-muted mb-3">Product Details</p>

            <div class="row border rounded m-3 d-flex">
                
              <div class="col-5 m-5">
                <label class="form-label" for="title">Product Title</label>
                <input class="form-control text-dark" type="text" name="title" id="title">

                <label class="form-label" for="price">Product Price</label>
                <input class="form-control text-dark" type="number" name="price" id="price">

                <label class="form-label" for="discount_price">Discount Price</label>
                <input class="form-control text-dark" type="number" name="discount_price" id="discount_price">

                
                <label class="form-label" for="quantity">Quantity</label>
                <input class="form-control text-dark" type="number" name="quantity" id="quantity">


                <label class="form-label" for="category">Category</label>
                <select class="form-control text-dark" name="category_id">
                  <option value="3" selected >Others</option>
                  @foreach ($category as $one_category )
                    <option 
                      value="{{$one_category['id']}}">{{$one_category['id']}}.{{$one_category['category_name']}}
                    </option>
                  @endforeach                                        
                </select>
              </div> 
              {{-- left col --}}

              <div class="col-5 m-5">
                
                <h6>Availability</h6>
                <div class="form-check">
                  <input class="form-check-input text-dark" type="radio" name="availability" id="availability" value="1" checked>
                  <label class="form-check-label " for="availability">
                    Available 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="availability" id="availability" value="2">
                  <label class="form-check-label " for="availability">
                    Not Available
                  </label>
                </div>

                <div class="mb-3">
                  <label for="formFile" class="form-label">Product Image</label>
                  <input class="form-control bg-light" type="file" id="formFile" name="image">
                </div>


                <label class="form-label mt-3" for="description">Description</label>
                <div class="form-floating">
                  <textarea class="form-control text-dark" name="description" placeholder="Leave a comment here" id="description"></textarea>
                </div>

                <div class="row mt-5 d-flex justify-content-end">
                  <button class="btn btn-lg btn-warning fw-bold">
                      Add Product
                  </button>
                </div>

              </div> 
                {{-- right col --}}

            </div> 
            {{-- row --}}
         
        </div>
        {{-- card --}}
    </form>
   

            






 
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
