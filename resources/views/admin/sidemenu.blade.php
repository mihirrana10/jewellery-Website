<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Products</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i> 
          </a>
          <div class="collapse" id="ui-product">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add Product</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Products</a></li>
            </ul>
          </div>
        </li>
        
        <li class="nav-item nav-category">Categories</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Categories</span>
            <i class="menu-arrow"></i> 
          </a>
          <div class="collapse" id="ui-category">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Add Category</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Category</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">User Management</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-account-circle-outline"></i>
            <span class="menu-title">User Management</span>
            <i class="menu-arrow"></i> 
          </a>
          <div class="collapse" id="ui-user">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">View Users</a></li>
              {{-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Category</a></li> --}}
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">Order Management</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-order" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Order Management</span>
            <i class="menu-arrow"></i> 
          </a>
          <div class="collapse" id="ui-order">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html"></a></li> --}}
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">View Order</a></li>
            </ul>
          </div>
        </li>
        
        
      </ul>
    </nav>