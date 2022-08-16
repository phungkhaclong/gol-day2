 {{-- <div class="col-md-3 main_left">
     <ul>
         <h3>{{ __('messages.system') }}</h3>
         <li><a href="{{ route('admin.user.index') }}">{{ __('messages.user') }}</a></li>
         <li><a href="{{ route('admin.role.index') }}">{{ __('messages.role') }}</a></li>
         <li><a href="{{ route('admin.permission.index') }}">{{ __('messages.per') }}</a></li>
         <li><a href="{{ route('admin.permission-group.index') }}">{{ __('messages.per-group') }}</a></li>

     </ul>
     <ul>
         <h3>{{ __('messages.catalog') }}</h3>
         <li><a href="{{ route('admin.product.index') }}"> {{ __('messages.category') }}</a></li>
         <li><a href="{{ route('admin.category.index') }}">{{ __('messages.product') }}t</a></li>
     </ul>
 </div> --}}


 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('../admin123')}}/dist/img/long.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('../admin123')}}/dist/img/long.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <h3>{{ __('messages.system') }}</h3>
            <li><a href="{{ route('admin.user.index') }}">{{ __('messages.user') }}</a></li>
            <li><a href="{{ route('admin.role.index') }}">{{ __('messages.role') }}</a></li>
            <li><a href="{{ route('admin.permission.index') }}">{{ __('messages.per') }}</a></li>
            <li><a href="{{ route('admin.permission-group.index') }}">{{ __('messages.per-group') }}</a></li>
            <h3>{{ __('messages.catalog') }}</h3>
            <li><a href="{{ route('admin.product.index') }}"> {{ __('messages.category') }}</a></li>
            <li><a href="{{ route('admin.category.index') }}">{{ __('messages.product') }}t</a></li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
