<!DOCTYPE html>
<html lang="en">

@include('admin.hedarfile')

<body>
  
    @include('admin.hedar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html side menu -->
     @include('admin.sidecol')
      
      {{-- <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="{{url('admin/images/faces/face1.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{url('admin/images/faces/face2.jpg')}}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{url('admin/images/faces/face3.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{url('admin/images/faces/face4.jpg')}}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{url('admin/images/faces/face5.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{url('admin/images/faces/face6.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div> --}}
      <!-- partial -->
      <!-- partial:partials/_sidebar.html  SIDE BAR-->
      @include('admin.sidemenu')
      <!-- partial -->
      <div class="col-2 grid-margin stretch-card">
      </div>
      <div class="col-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Products</h4>
               <hr>
               {{$errors}}
                <form class="forms-sample" action="/admin/product" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  <div class="form-group col-6">
                    <label for="exampleInputName1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Name" name="product_name" value="{{old('product_name')}}">
                    @error('product_name')
                    <span>valied product</span>
                    @enderror
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail3">Product Style Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Product Style Number" name="product_style_number" value="{{old('product_style_number')}}">
                    @error('product_style_number')
                    <span>valied product</span>
                    @enderror
                  </div>
                 </div> 
                  <hr>
                  <h4 class="card-title">Metal</h4>
                  <hr>
                 <div class="row">   
                  <div class="form-group col-6">
                        <label for="exampleSelectGender">Metal Type</label>
                          <select class="form-control" id="exampleSelectGender" name="metal_type">
                              <option value="">Select Metal Type</option>
                          <option value="Gold">Gold</option>
                          <option value="Silver">Silver</option>
                          <option value="Platinum2hellobro">Platinum</option>
                         
                         </select>                    
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail3">Metal Weight</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Metal Weight" name="metal_weight">
                      </div>
                 </div>   
                 <div class="row">      
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Metal Unit</label>
                        <select class="form-control" id="exampleSelectGender" name="metal_unit">
                              <option value="">Select Metal unit</option>
                          <option value="gram">Gram</option>
                          {{-- <option value="Silver">Silver</option>
                          <option value="Platinum">Platinum</option> --}}
                         
                         </select> 
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Metal Purity</label>
                        <select class="form-control" id="exampleSelectGender" name="metal_purity">
                              <option value="">Select Metal Purity</option>
                          <option value="12k">12k</option>
                          <option value="14k">14k</option>
                          <option value="18k">18k</option>
                          <option value="22k">22k</option>
                          <option value="24k">24k</option>

                         
                         </select> 
                      </div>
                 </div>  
                 <div class="row">     
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Metal Color</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Metal Color" name="metal_color">
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Metal Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Metal Price" name="metal_price">
                      </div>
                 </div>     
                      <hr>
                      <h4 class="card-title">Diamond</h4>
                      <hr>
                   <div class="row">    
                      <div class="form-group col-6">
                        <label for="exampleSelectGender">Diamond Type</label>
                          <select class="form-control" id="exampleSelectGender" name="diamond_type">
                              <option value="">Select Diamond Type</option>
                          <option value="Gold">Gold</option>
                          <option value="Silver">Silver</option>
                          <option value="Platinum">Platinum</option>
                         
                         </select>                    
                    </div>
                
                    <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond Color</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Diamond Color" name="diamond_color">
                      </div>
                   </div>   
                   <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond Count</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Diamond Count" name="diamond_count">
                      </div>

                       <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Diamond Price" name="diamond_price">
                      </div>
                   </div>
                   <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond Setting Type</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Diamond Setting Type" name="diamond_setting_type">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond Grade</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Diamond Grade" name="diamond_grade">
                      </div>
                   </div>
                   <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond Gross Weight</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Diamond Gross Weight" name="diamond_gross_weight">
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Diamond weight Unit</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Diamond weight Unit" name="diomond_weight_unit">
                      </div>
                   </div> 
                   <hr>
                   <h4 class="card-title">Product Detils</h4>
                   <hr>
                   <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Product Height</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Product Height" name="product_height">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Product Weight</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Product Weight" name="product_width">
                      </div>
                   </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Product Description</label>
                        <textarea class="form-control" id="exampleTextarea1" name="product_description" placeholder="Product Description" style="height:150px"></textarea>
                      </div>
                    <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Product Discount</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Product Discount" name="product_discount">
                      </div>

                      {{-- <div class="form-group col-6">
                        <label for="exampleInputEmail3">Product GST</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Product GST" name="product_gst">
                      </div> --}}
                    </div>
                    <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Product Size</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Product Size" name="product_size">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Product Length</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Product Length" name="product_length">
                      </div>
                    </div>

                    <div class="row">   
                      <div class="form-group col-6">
                        <label for="exampleInputEmail3">Category</label>
                        <select class="form-control" id="exampleSelectGender" name="category_id" >
                              <option value="">Select Category Type</option>
                          <option value="1">Ring</option>
                          <option value="2">Pendant</option>
                          <option value="3">Earings</option>
                         
                         </select>  
                         
                      </div>
                      <div class="form-group col-6">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="form-control" accept="image/*">

                      </div>
                    </div>

                  <button type="submit" name="" class="btn btn-primary me-2">Submit</button>
                  <button type="reset" class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-2 grid-margin stretch-card">
          
      </div>
      <!-- main-panel ends -->
    </div>
   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('admin.footerfile')
  
</body>

</html>

