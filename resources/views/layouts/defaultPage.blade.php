<!DOCTYPE html>

<!--[if IE 8]>   http://ianlunn.github.io/Hover/
<html lang="en" class="ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Head BEGIN -->
<head>
    <?php
    $setting = \App\Models\Setting::find(1);
    $social = \App\Models\SocialMedia::orderby('sort','asc')->get();
    ?>
    <meta charset="utf-8">
    <title> <?php echo $setting->company_name?> </title>
    <meta content="width=device-width, initial-scale=1.0 , minimum-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="" name="description">
    <meta content="" name="keywords">
    {{ Html::style('front/fonts/font-awesome/css/font-awesome.min.css')}}
    {{ Html::style('front/dist/css/bootstrap.min.css') }}
    {{ Html::style('front/css/jquery.mCustomScrollbar.min.css') }}
    {{ Html::style('front/css/swiper.min.css') }}
    {{ Html::style('front/css/bootstrap-select.min.css') }}
    {{ Html::style('front/css/style.css') }}
    {{ Html::script('front/js/jquery.min.js') }}
    <link rel="shortcut icon" href="{{url('/front/fav/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{url('/front/fav//favicon.ico')}}" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top top-navigation-bar">
            <div class="navbar-collapse collapse justify-content-between align-items-center" id="navbarCollapse" aria-expanded="false">
                <a class="navbar-brand" href="{{url('/')}}/">
                    <?php if($setting->logo){ ?>
                        <img src='{{url('/Uploads/setting/logo/'. $setting->logo)}}' alt="{{$setting->company_name}}" />
                    <?php }?>
                </a>
                <span class="js-nav-toggle nav-toggle"><i></i></span>
                <ul class="social d-flex align-items-center mb-0">
                    <li class='form mr-2'>
                        <form class="form-inline mt-2 mt-md-0" id="newsletter_form">
                            {{ csrf_field() }}
                            <input class="form-control" type="text" placeholder="Email" name="email" required id="newsletter_email">
                            <button type="submit" class="btn btn-primary my-1" role='button'>Subscribe</button>
                        </form>
                    </li>
                    @foreach ($social as $item)
                    <li>
                        <a href="{{$item->link}}" target="_blank">
                            <i class="fa fa-{{$item->icon}}" aria-hidden="true"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <div class='back_bg'>  </div>
        <div id="menu-offcanvas">
            <div class=" text-center mp-2 p-1 ">
                <a class="navbar-brand" href="{{url('/')}}/">
                    <?php if($setting->logo){ ?>
                        <img src='{{url('/Uploads/setting/logo/'. $setting->logo)}}' alt="{{$setting->company_name}}"/>
                    <?php }?>
                </a>
            </div>
            <ul  class='items'>
                <li> <a href="{{url('/')}}/" class="">Home</a></li>
                <li> <a href="#" class="">About US</a> </li>
                <li> <a href="#" class="">Services</a></li>
                <li> <a href="{{ route('ourProcessing.index') }}" class="">Our Process</a></li>
                <li> <a href="{{ route('ourCustomers.index') }}" class="">Our Customers</a> </li>
                <li> <a href="{{ route('contactUs.index') }}" class="active">Contact Us</a> </li>
            </ul>
            <form action="" method="get" class="search-form my-4">
                <div class="form-group mb-0">
                    <input type="email" name="q" class='form-control' id="mail" placeholder="Email">
                    <button  type="submit" class="fa fa-send" aria-hidden="true"></button>
                </div>
            </form>
            <ul class="social list-inline">
                @foreach ($social as $item)
                <li>
                    <a href="{{$item->link}}" target="_blank">
                        <i class="fa fa-{{$item->icon}}" aria-hidden="true"></i>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </header>
    <div class='page-wrapper'>
        @yield('content')
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body msg">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{ Html::script('front/dist/js/tether.min.js') }}
    {{ Html::script('front/dist/js/bootstrap.min.js') }}
    {{ Html::script('front/js/bootstrap-select.min.js') }}
    {{ Html::script('front/js/swiper.min.js') }}
    {{ Html::script('front/js/jquery.mCustomScrollbar.concat.min.js') }}
    {{ Html::script('front/js/scripts.js') }}
    <script>
    $( document ).ready(function() {
        $('#newsletter_form').submit(function(e){
            e.preventDefault();
            var _token = $('input[name="_token"]').val();
            let email =$('#newsletter_email').val();
            $.ajax({
                type:'POST',
                url:'{{ route('subscribe.add') }}',
                data:{'email':email,_token : _token },
                success:function(data){
                    var output="";
                    if(data.status){
                        output+="<div class='text-success text-center'>";
                          output+=data.message;
                        output+="</div>";
                        $('#newsletter_email').val("");
                    }else{
                        output+="<div class='text-danger text-center'>";
                        for(var i=0;i<data.message.length;i++){
                            output+=data.message[i];
                        }
                        output+="</div>";
                    }
                    $('.msg').html(output);
                    if(!$('#myModal').is(':visible')){
                        $('#myModal').modal('show');
                    }
                }
            });

        })
    });

    </script>
</body>
<!-- END BODY -->
</html>
