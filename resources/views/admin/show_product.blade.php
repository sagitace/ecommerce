<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')

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


            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                      
                        <h4 class="card-title" style="font-weight: 800;">All Product</h4>
                        <p class="card-description mb-3"> A total of <span style="font-weight: bold;">{{$total_product}}</span> product(s)
                        </p>
                        
                        <div class="row">
                          <div class="col-12 ms-5 mb-4 d-flex justify-content-end">

                            <a href="/show_product/archive">
                              <button class="btn hover-text text-warning">See Archived...</button>      
                            </a>
                           
                          </div>
                          
                        </div>

                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th class="text-white"> ID </th>
                                <th class="text-white"> Name </th>
                                <th class="text-white"> Description</th>
                                <th class="text-white"> Image </th>
                                <th class="text-white"> Availability </th>
                                <th class="text-white"> Category </th>
                                <th class="text-white"> Price </th>
                                <th class="text-white"> D Price</th>
                                <th class="text-white"> Archive </th>
                                <th class="text-white"> Edit </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                @if ($product->deleted_at == null)
                                    
                                
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>

                                    <td class="text-wrap" style="max-width: 10rem;">{{$product->description}}</td>
                                    
                                    <td class="d-flex justify-content-center"><img class="img_size" 
                                      src="
                                      
                                      
                                      {{ $product->image ? asset('storage/' . $product->image) : asset('/product/no-image.png') }}

                                      
                                      ">
                                                                          
                                    </td>

                                    <td>
                                      
                                      {!! $product->availability==1 ? "<span class=\"text-success\">Available</span>" : "Not Available" !!}

                                      {{-- {{$product->availability}} --}}
                                    </td>
                                    <td>
                                      {{$product->category->category_name}}
                                    </td>

                                    <td>₱{{$product->price}}</td>
                                    <td>
                                        @if($product->discount_price != null)
                                        ₱{{$product->discount_price}}
                                        @else
                                        {{$product->discount_price}}
                                        @endif

                                    </td>


                                    <td>
                                      <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this product?')" href="{{url('delete_product', $product->id)}}">Archive </a>
                                    </td>

                                    <td>
                                      <a class="btn btn-success" href="{{url('edit_product',$product->id)}}">Edit</a>
                                    </td>

                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
