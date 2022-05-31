<!doctype html>
<html lang="en">
<head>    

    {{-- google verify --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2849389787801679"
     crossorigin="anonymous"></script>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NZ4PC8L');</script>
<!-- End Google Tag Manager -->
  
    {{-- include('GA.enable-auto-ad') --}}
    <meta charset="utf-8"/>

    {{--    Noindex when open modal Get code--}}
    @if( strpos($_SERVER['REQUEST_URI'],'coupon-detail') !== FALSE )
        <meta name="robots" content="noindex, noarchive">
    @endif

    @include('elements.head-seo')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="p:domain_verify" content="995b13c05dc44be88c138fd4d07087f5"/>
    <meta name="fo-verify" content="af01f140-9ce6-4a5a-a4b5-e2327b37dbd4">
    <meta name="verify-admitad" content="a885bc8355" />
    <meta name="gb-site-verification" content="9cb94edb46a39a0159dd3e0666e64345dadf951b">
    <meta name="yandex-verification" content="7d7a4af96f743ddd" />
    <meta name="verification" content="a9422a1057af1ef7a0ece915e1424ccc" />
    <script type="text/javascript">
        var _prosperent = {campaign_id: 'e6af1e12ee56f27d66025a90fb8e3be5'};
    </script>
    <!-- TradeDoubler site verification 2982804 -->

    {{--    verify Impact Radius network--}}
    <meta name='ir-site-verification-token' value='-1144875155' />

    <!-- Fonts -->
    @yield('fonts')

    @if(!empty($aliasAMP))
        <link rel="amphtml" href="{{ url('/amp/' . ($aliasAMP!='/'?$aliasAMP:'')) }}">
    @endif 

    <!-- Stylesheet -->
    <link rel="shortcut" href="{{ asset('favicon.ico') }}"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    @if(config('config.dev_mode'))
        <dev.mode is on ></dev.mode>
        <link href="{{ asset('vendor/bootstrap-3.3.4-dist/css/bootstrap.min.css'.$common['version_app']) }}" rel="stylesheet"type='text/css'/>
        <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css'.$common['version_app']) }}" rel="stylesheet"type='text/css'/>
        <link href="{{ asset('vendor/select2/select2.min.css'.$common['version_app']) }}" rel="stylesheet" type='text/css'/>
        <link href="{{ asset('vendor/flexslider/css/flexslider.min.css'.$common['version_app']) }}" rel="stylesheet" type='text/css'/>
        <link href="{{ asset('vendor/select2/select2-bootstrap.min.css'.$common['version_app']) }}" rel="stylesheet" type='text/css'/>
        <link href="{{ asset('vendor/bootstrap-datepicker/datepicker3.css'.$common['version_app']) }}" rel="stylesheet"type='text/css'/>
        <link href="{{ asset('vendor/webui-popover/dist/jquery.webui-popover.min.css'.$common['version_app']) }}" rel="stylesheet"type='text/css'/>
        <link href="{{ asset('vendor/perfect-scrollbar/css/perfect-scrollbar.min.css'.$common['version_app']) }}" rel="stylesheet"type='text/css'/>
        <link href="{{ asset('css/sass/app.css'.$common['version_app']) }}" rel="stylesheet" type='text/css'/>
        <script src="{{ asset('vendor/jquery/jquery-1.11.3.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/bootstrap-3.3.4-dist/js/bootstrap.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-validate/jquery.validate.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/select2/select2.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/flexslider/js/jquery.flexslider-min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/truncate/truncate.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/jquery-timeago/jquery.timeago.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/webui-popover/dist/jquery.webui-popover.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('vendor/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js'.$common['version_app']) }}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js'.$common['version_app']) }}" type="text/javascript"></script>
    @else
        <link href="{{ asset('static/css/frontend.min.css') }}" rel="stylesheet" type='text/css'/>
        <script src="{{ asset('static/js/frontend.min.js') }}" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/ba60126667.js" crossorigin="anonymous"></script>
    @endif

    <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>

    @yield('stylesheet')

    @yield('scripts')

<!-- Scripts -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <![endif]-->
    
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ4PC8L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

{{--@include('elements.protect-source')--}}

<a href="javascript:void(0);" data-toggle="modal" data-href="{{url('/go/getCode/')}}" data-target="#getCodeModal" class="click-to-get-code"></a>
@yield('before-header')
@include('elements.header')
<!-- Body -->
@yield('before-body')
<div class="body">
    @if((isset($disable) && $disable == false) && (!isset($showSignStep) || $showSignStep == true))
        @include('elements.sign-up-step-by-step')
    @endif
    <div class="page-content">
        @yield('content')
    </div>
</div>
<!-- /Body -->
<!-- Footer -->
@yield('before-footer')
@include('elements.footer')
<!-- Scripts extra -->
@yield('scripts-footer')
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-102045239-1', 'auto');
    ga('send', 'pageview');
</script>


</body>
</html>