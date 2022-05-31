<!doctype html>
<html lang="en">
<head>    
    @include('elements.thirdparty.google.tagmanager')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if( strpos($_SERVER['REQUEST_URI'],'coupon-detail') !== FALSE )
        <meta name="robots" content="noindex, noarchive">
    @endif

    @include('elements.head-seo')
    @include('elements.thirdparty.verifications')
    @include('elements.fonts.base')

    <!-- Fonts -->
    @yield('fonts')

    @if(!empty($aliasAMP))
        <link rel="amphtml" href="{{ url('/amp/' . ($aliasAMP!='/'?$aliasAMP:'')) }}">
    @endif 

    <!-- Stylesheet -->
    <link rel="shortcut" href="{{ asset('favicon.ico') }}"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

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