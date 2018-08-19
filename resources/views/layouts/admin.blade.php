<!doctype html>
<html lang="en">
<head>
  <title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- CSS -->
  {{ Html::style('backend/css/bootstrap.min.css') }}
  {{ Html::style('backend/css/bootstrap-select.min.css') }}
  {{ Html::style('backend/css/vendor/icon-sets.css') }}
  {{ Html::style('backend/css/main.min.css') }}
  {{ Html::style('backend/style/font-awesome/css/font-awesome.min.css') }}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  {{ Html::style('backend/css/demo.css') }}
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="shortcut icon" href="{{url('/front/fav/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{url('/front/fav//favicon.ico')}}" type="image/x-icon">

</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- SIDEBAR -->
    <div class="sidebar">
      <div class="brand">
        <?php  $setting = \App\Models\Setting::find(1); ?>
        <a href="{{url('/')}}/"><img src="{{url('/Uploads/setting/logo/'. $setting->logo)}}" alt="Klorofil Logo" class="img-responsive logo"></a>
      </div>
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="{{ route('users.index') }}"   class="{{ Request::segment(2) === 'home' ? 'active' : '' }}" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('users.index') }}" class="{{ Request::segment(2) === 'users' ? 'active' : '' }}" > <i class="lnr lnr-users"></i><span>Users</span></a></li>
            <li><a href="{{ route('setting.edit',1) }}" class="{{ Request::segment(2) === 'setting' ? 'active' : '' }}" > <i class="lnr lnr-cog"></i><span>Setting</span></a></li>
            <li><a href="{{ route('socialMedia.index') }}" class="{{ Request::segment(2) === 'socialMedia' ? 'active' : '' }}" > <i class="lnr lnr-moon"></i><span>Social Media</span></a></li>
            <li><a href="{{ route('contactRequest.index') }}" class="{{ Request::segment(2) === 'contactRequest' ? 'active' : '' }}" > <i class="lnr lnr-phone-handset"></i><span>Contact Us</span></a></li>
            <li><a href="{{ route('newsletter.index') }}" class="{{ Request::segment(2) === 'newsletter' ? 'active' : '' }}" > <i class="lnr lnr-envelope"></i><span>Newsletter</span></a></li>
            <li><a href="{{ route('ourProcess.edit',1) }}" class="{{ Request::segment(2) === 'ourProcess' ? 'active' : '' }}" > <i class="lnr lnr-sync"></i><span>Our Process</span></a></li>
            <li><a href="{{ route('services.index') }}" class="{{ Request::segment(2) === 'services' ? 'active' : '' }}" > <i class="lnr lnr-magic-wand"></i><span>Services</span></a></li>
            <li><a href="{{ route('customer.index') }}" class="{{ Request::segment(2) === 'customer' ? 'active' : '' }}" > <i class="lnr lnr-users"></i><span>Customer</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- NAVBAR -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
              <span class="sr-only">Toggle Navigation</span>
              <i class="fa fa-bars icon-nav"></i>
            </button>
          </div>
          <div id="navbar-menu" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown">
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{url('/backend/img/user.png')}}" class="img-circle" alt="Avatar"> <span>  {{ Auth::user()->name }} </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('/logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </ul>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          @yield('content')
        </div>
        <!-- END MAIN CONTENT -->
        <footer>
          <div class="container-fluid">
            <p class="copyright">&copy; 2016. Designed &amp; Crafted by <a href="https://themeineed.com">The Develovers</a></p>
          </div>
        </footer>
      </div>
      <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    {{ Html::script('backend/js/jquery/jquery-2.1.0.min.js') }}
    {{ Html::script('backend/js/bootstrap/bootstrap.min.js') }}
    {{ Html::script('backend/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
    {{ Html::script('backend/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}
    {{ Html::script('backend/js/plugins/chartist/chartist.min.js') }}
    {{ Html::script('backend/js/klorofil.min.js') }}
    {{ Html::script('backend/js/bootstrap-select.js') }}
    {{ Html::script('backend/tinymce/tinymce.min.js') }}
    <!--    {{ Html::script('tinymce/tinymce_config.js') }}
  -->
  <script>
  $(document).ready(function() {
    tinymce.init({
      selector: "textarea.tinymce",
      height: 200,
      plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
      ],
      file_browser_callback_types: 'file image media',
      images_upload_url: '{{ route('uploadImage.store') }}',
      images_upload_credentials: true,
      images_reuse_filename: true,
      automatic_uploads: true,
      toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
      toolbar2: "cut copy paste pastetext| searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media cleanup help code | insertdatetime preview | forecolor backcolor",
      toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'],
        menubar: false,
        toolbar_items_size: 'small',
        relative_urls: false,

        style_formats: [{
          title: 'Bold text',
          inline: 'b'
        }, {
          title: 'Red text',
          inline: 'span',
          styles: {
            color: '#ff0000'
          }
        }, {
          title: 'Red header',
          block: 'h1',
          styles: {
            color: '#ff0000'
          }
        }, {
          title: 'Example 1',
          inline: 'span',
          classes: 'example1'
        }, {
          title: 'Example 2',
          inline: 'span',
          classes: 'example2'
        }, {
          title: 'Table styles'
        }, {
          title: 'Table row 1',
          selector: 'tr',
          classes: 'tablerow1'
        }],
        templates: [        ],
        init_instance_callback: function () {
          window.setTimeout(function() {
            $("#div").show();
          }, 1000);
        }
      });
    });

    </script>
  </body>
  </html>
