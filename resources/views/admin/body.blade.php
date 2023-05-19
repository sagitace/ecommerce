<div class="main-panel">
          <style>
            h3{
              padding-bottom: 2rem;
            }

            .card:hover {
                background-color: #272c39;
                transition: background-color 0.3s ease-in-out;
              }


          </style>
          <div class="content-wrapper">


            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{url('/show_product')}}" style="text-decoration: none; color:white;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_product}}</h3> 
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Products</h6> 
                  </div>
                </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{url('order')}}" style="text-decoration: none; color:white;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_order}}</h3>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Order</h6>
                  </div>
                    </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{url('customer')}}" style="text-decoration: none; color:white;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_user}}</h3>

                        </div>
                      </div>

                    </div>
                    <h6 class="text-muted font-weight-normal">Total Users</h6>
                  </div>
                </a>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">₱{{$total_revenue}}</h3>

                        </div>
                      </div>

                    </div>
                    <h6 class="text-muted font-weight-normal">Total Revenue</h6>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{url('delivered')}}" style="text-decoration: none; color:white;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$total_delivered}}</h3>

                        </div>
                      </div>

                    </div>
                    <h6 class="text-muted font-weight-normal">Order Delivered</h6>
                  </div>
                </a>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="{{url('processing')}}" style="text-decoration: none; color:white;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">{{$total_processing}}</h3>

                            </div>
                          </div>

                        </div>
                        <h6 class="text-muted font-weight-normal">Order Processing</h6>
                      </div>
                    </a>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <a href="/show_product/archive" style="text-decoration: none; color:white;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0">{{$total_product_archived}}</h3>

                            </div>
                          </div>

                        </div>
                        <h6 class="text-muted font-weight-normal">Product Archive</h6>
                      </div>
                    </a>
                </div>
              </div>




            </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
