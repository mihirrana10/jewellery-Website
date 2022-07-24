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
     
      <div class="col-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body"><h4><b>User View</b></h4>
                {{-- <p class="card-description">
                  Add class <code>.table-striped</code>
                </p> --}}
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                        No
                        </th>
                        <th>
                         User Firstname
                        </th>
                        <th>
                          User Lastname
                        </th>
                        <th>
                            User Email
                        </th>
                        <th>
                         Action
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                         1
                        </td>
                        <td>
                         Herman Beck
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                         hello@gmail.com
                        </td>
                        <td>
                              <button type="button" class="btn btn-primary"><i class="menu-icon mdi mdi-table-edit"></i></button>

                              <button type="button" class="btn btn-danger"> <i class="menu-icon  mdi mdi-delete"></i></button>
                        </td>
                      
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         


  @include('admin.footer')
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

  @include('admin.footerfile')
  
</body>

</html>

