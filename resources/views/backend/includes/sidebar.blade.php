 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/categories*')?'active':'' }} " href="{{ route('admin.categories.index') }}">
          <i class="bi bi-grid"></i>
          <span>Categories</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/products*') ?'active':'' }} " href="{{ route('admin.products.index') }}">
            <i class="bi bi-basket2"></i>
          <span>Products</span>
        </a>
      </li><!-- End Dashboard Nav -->
 
 
     

    </ul>

  </aside><!-- End Sidebar-->