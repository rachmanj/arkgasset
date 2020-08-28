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
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('templates.partials.footer')

</div>
<!-- ./wrapper -->

@include('templates.partials.scripts')

</body>
</html>