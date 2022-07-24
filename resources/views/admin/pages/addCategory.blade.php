<!DOCTYPE html>
<html lang="en">

@include('admin.hedarfile')

<body>
  
    @include('admin.hedar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html side menu -->
     @include('admin.sidecol')
      
    
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html  SIDE BAR-->
      @include('admin.sidemenu')
      <!-- partial -->
      <div class="col-2 grid-margin stretch-card">
      </div>
      <div class="col-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Category</h4>
               <hr>
                <form class="forms-sample">
                 
                  <div class="form-group ">
                    <label for="exampleInputName1">Category Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Category Name" name="category_name">
                  </div>
                  
                  <div class="form-group">
                        <label for="exampleInputEmail3">Category Description</label>
                        <textarea class="form-control" id="exampleTextarea1" placeholder="Category Description" name="category_description" style="height:150px"></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="form-control">
                      </div>

                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button type="Cancel" class="btn btn-light">Cancel</button>
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

