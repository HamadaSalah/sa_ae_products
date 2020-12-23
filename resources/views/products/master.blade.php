@include('products.layouts.header')
  <div class="content-wrapper" style="padding-top: 30px; min-height:600px!important">
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
@include('products.layouts.footer')
