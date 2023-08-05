
@include('backend.layout.header')
<!-- Navbar -->
@include('backend.layout.nav')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('backend.layout.sidebbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
  </section>
</div>
<!-- /.content-wrapper -->

{{-- Footer --}}
@include('backend.layout.footer')
{{-- footer --}}
