<!DOCTYPE html>

<html>

@include('templates.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('templates.partials.topbar')
  
  @include('templates.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('breadcrumb')
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @yield('content')

    </section>
    
  </div>
  <!-- /.content-wrapper -->

  @include('templates.partials.footer')

</div>
<!-- ./wrapper -->

@include('templates.partials.scripts')

</body>
</html>