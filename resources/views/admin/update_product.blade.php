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
  <div class="card mt-5">

          <div class="div_center">

            <h1 class="font_size cart-title text-center mt-4 mb-4">Update Product</h1>

            <form action="/edit_product/{{$product->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">

                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Name</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control text-dark" value="{{($product->title)}}">
                                  </div>
                                </div>

                            </div>
                            <div class="col-12">

                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Price</label>
                                  <div class="col-sm-8">
                                    <input type="number" name="price" value="{{$product->price}}" class="form-control text-dark" placeholder="Enter product price" min="1" required=""/>
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">

                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Discounted Price</label>
                                  <div class="col-sm-8">
                                    <input type="number" name="discount_price" value="{{$product->discount_price}}" class="form-control text-dark" min="1" placeholder="Enter product discounted price"/>
                                  </div>
                                </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Category</label>
                                  <div class="col-sm-8">
                                    <select class="form-control text-white" name="categories_id">
                                      <option value="{{$product->category->id}}" class="text-muted" selected="{{$product->category->id}}">{{$product->category->id}}. {{$product->category->category_name}}</option>

                                      @foreach($category as $category)

                                    <option class="text-white" value="{{$category->id}}">{{$category->id}}. {{$category->category_name}}</option>

                                    @endforeach
                                    </select>
                                  </div>
                                </div>

                            </div>
                            <div class="col-12">

                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Current Image</label>
                                  <div class="col-sm-8">
                                      <img style="" src="/storage/{{$product->image}}" height="70px" width="70px" alt="">
                                  </div>
                                </div>


                            </div>
                            <div class="col-12">
                              <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Change Image</label>
                                  <div class="col-sm-8">
                                      <input type="file" name="image" class="form-control text-secondary" >
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-auto form-check-inline">
                            <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault1" value="1" {{ $product->availability == 1 ? 'checked' : ''}}>
                            <label class="form-check-label text-white-50 " for="flexRadioDefault1">
                                Available
                            </label>
                        </div>
                    
                        <div class="col-auto form-check-inline">
                            <input class="form-check-input" type="radio" name="availability" id="flexRadioDefault2" value="2" {{ $product->availability == 2 ? 'checked' : ''}}>
                            <label class="form-check-label  text-white-50" for="flexRadioDefault2" >
                                Not Available
                            </label>
                        </div>
                    </div>
                          
                        <div class="row  form-group">
                            <label for="exampleTextarea1" class="col-form-label">Description</label>

                              <textarea class="form-control text-secondary rounded-lg" rows="5" name="description" value="{{$product->description}}" >
                                
                                {{$product->description}}
                                
                              </textarea>
                              
                        </div>

                      <div class="row mt-5 d-flex justify-content-end">
                        <button class="btn btn-lg btn-warning fw-bold">
                            Update
                        </button>
                      </div>

                    </div>
                  </div>
                </div>
            </form>
                          
                
              
          </div>

  </div>
         
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
