<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ url('img/favicon.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/popup/magnific-popup.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">

      {{-- select2 --}}

      <link rel="stylesheet" href="{{ url('vendor/adminlte/plugins/select2/select2.min.css') }}">
    @yield('style')
      {{--<link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">--}}

      <style>
          .form-control{
              box-shadow: none !important;
              border-radius: 0px !important;
              border-bottom: none !important;
              border-top: none !important;
              border-left: none !important;
              border-right: none !important;
          }
          .popover.primary {
              border-color:#337ab7;
          }
          .popover.primary>.arrow {
              border-top-color:#337ab7;
          }
          .popover.primary>.popover-title {
              color:#fff;
              background-color:#337ab7;
              border-color:#337ab7;
          }
          .popover.success {
              border-color:#d6e9c6;
          }
          .popover.success>.arrow {
              border-top-color:#d6e9c6;
          }
          .popover.success>.popover-title {
              color:#3c763d;
              background-color:#dff0d8;
              border-color:#d6e9c6;
          }
          .popover.info {
              border-color:#bce8f1;
          }
          .popover.info>.arrow {
              border-top-color:#bce8f1;
          }
          .popover.info>.popover-title {
              color:#31708f;
              background-color:#d9edf7;
              border-color:#bce8f1;
          }
          .popover.warning {
              border-color:#faebcc;
          }
          .popover.warning>.arrow {
              border-top-color:#faebcc;
          }
          .popover.warning>.popover-title {
              color:#8a6d3b;
              background-color:#fcf8e3;
              border-color:#faebcc;
          }
          .popover.danger {
              border-color:#ebccd1;
          }
          .popover.danger>.arrow {
              border-top-color:#ebccd1;
          }
          .popover.danger>.popover-title {
              color:#a94442;
              background-color:#f2dede;
              border-color:#ebccd1;
          }
          @-webkit-keyframes spinAround{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes spinAround{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.is-divider,.is-divider-vertical{display:block;position:relative;border-top:.1rem solid #dbdbdb;height:.1rem;margin:2rem 0;text-align:center}.is-divider-vertical[data-content]::after,.is-divider[data-content]::after{background:#fff;color:#b5b5b5;content:attr(data-content);display:inline-block;font-size:.75rem;padding:.4rem .8rem;-webkit-transform:translateY(-1.1rem);transform:translateY(-1.1rem);text-align:center}@media screen and (min-width:769px),print{.is-divider-vertical{display:block;flex:none;width:auto;height:auto;padding:2rem;margin:0;position:relative;border-top:none;min-height:2rem}.is-divider-vertical::before{border-left:.1rem solid #dbdbdb;bottom:1rem;content:"";display:block;left:50%;position:absolute;top:1rem;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.is-divider-vertical[data-content]::after{position:absolute;left:50%;top:50%;padding:.1rem;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%)}}.is-divider-vertical.is-white,.is-divider.is-white{border-top-color:#fff}.is-divider-vertical.is-white[data-content]::after,.is-divider.is-white[data-content]::after{background:#0a0a0a;color:#fff}.is-divider-vertical.is-white::before,.is-divider.is-white::before{border-left-color:#fff}.is-divider-vertical.is-black,.is-divider.is-black{border-top-color:#0a0a0a}.is-divider-vertical.is-black[data-content]::after,.is-divider.is-black[data-content]::after{background:#fff;color:#0a0a0a}.is-divider-vertical.is-black::before,.is-divider.is-black::before{border-left-color:#0a0a0a}.is-divider-vertical.is-light,.is-divider.is-light{border-top-color:#f5f5f5}.is-divider-vertical.is-light[data-content]::after,.is-divider.is-light[data-content]::after{background:#363636;color:#f5f5f5}.is-divider-vertical.is-light::before,.is-divider.is-light::before{border-left-color:#f5f5f5}.is-divider-vertical.is-dark,.is-divider.is-dark{border-top-color:#363636}.is-divider-vertical.is-dark[data-content]::after,.is-divider.is-dark[data-content]::after{background:#f5f5f5;color:#363636}.is-divider-vertical.is-dark::before,.is-divider.is-dark::before{border-left-color:#363636}.is-divider-vertical.is-primary,.is-divider.is-primary{border-top-color:#00d1b2}.is-divider-vertical.is-primary[data-content]::after,.is-divider.is-primary[data-content]::after{background:#fff;color:#00d1b2}.is-divider-vertical.is-primary::before,.is-divider.is-primary::before{border-left-color:#00d1b2}.is-divider-vertical.is-link,.is-divider.is-link{border-top-color:#3273dc}.is-divider-vertical.is-link[data-content]::after,.is-divider.is-link[data-content]::after{background:#fff;color:#3273dc}.is-divider-vertical.is-link::before,.is-divider.is-link::before{border-left-color:#3273dc}.is-divider-vertical.is-info,.is-divider.is-info{border-top-color:#209cee}.is-divider-vertical.is-info[data-content]::after,.is-divider.is-info[data-content]::after{background:#fff;color:#209cee}.is-divider-vertical.is-info::before,.is-divider.is-info::before{border-left-color:#209cee}.is-divider-vertical.is-success,.is-divider.is-success{border-top-color:#23d160}.is-divider-vertical.is-success[data-content]::after,.is-divider.is-success[data-content]::after{background:#fff;color:#23d160}.is-divider-vertical.is-success::before,.is-divider.is-success::before{border-left-color:#23d160}.is-divider-vertical.is-warning,.is-divider.is-warning{border-top-color:#ffdd57}.is-divider-vertical.is-warning[data-content]::after,.is-divider.is-warning[data-content]::after{background:rgba(0,0,0,.7);color:#ffdd57}.is-divider-vertical.is-warning::before,.is-divider.is-warning::before{border-left-color:#ffdd57}.is-divider-vertical.is-danger,.is-divider.is-danger{border-top-color:#ff3860}.is-divider-vertical.is-danger[data-content]::after,.is-divider.is-danger[data-content]::after{background:#fff;color:#ff3860}.is-divider-vertical.is-danger::before,.is-divider.is-danger::before{border-left-color:#ff3860}.is-divider-vertical.is-black-bis,.is-divider.is-black-bis{border-top-color:#121212}.is-divider-vertical.is-black-bis[data-content]::after,.is-divider.is-black-bis[data-content]::after{background:#fff;color:#121212}.is-divider-vertical.is-black-bis::before,.is-divider.is-black-bis::before{border-left-color:#121212}.is-divider-vertical.is-black-ter,.is-divider.is-black-ter{border-top-color:#242424}.is-divider-vertical.is-black-ter[data-content]::after,.is-divider.is-black-ter[data-content]::after{background:#fff;color:#242424}.is-divider-vertical.is-black-ter::before,.is-divider.is-black-ter::before{border-left-color:#242424}.is-divider-vertical.is-grey-darker,.is-divider.is-grey-darker{border-top-color:#363636}.is-divider-vertical.is-grey-darker[data-content]::after,.is-divider.is-grey-darker[data-content]::after{background:#fff;color:#363636}.is-divider-vertical.is-grey-darker::before,.is-divider.is-grey-darker::before{border-left-color:#363636}.is-divider-vertical.is-grey-dark,.is-divider.is-grey-dark{border-top-color:#4a4a4a}.is-divider-vertical.is-grey-dark[data-content]::after,.is-divider.is-grey-dark[data-content]::after{background:#fff;color:#4a4a4a}.is-divider-vertical.is-grey-dark::before,.is-divider.is-grey-dark::before{border-left-color:#4a4a4a}.is-divider-vertical.is-grey,.is-divider.is-grey{border-top-color:#7a7a7a}.is-divider-vertical.is-grey[data-content]::after,.is-divider.is-grey[data-content]::after{background:#fff;color:#7a7a7a}.is-divider-vertical.is-grey::before,.is-divider.is-grey::before{border-left-color:#7a7a7a}.is-divider-vertical.is-grey-light,.is-divider.is-grey-light{border-top-color:#b5b5b5}.is-divider-vertical.is-grey-light[data-content]::after,.is-divider.is-grey-light[data-content]::after{background:#fff;color:#b5b5b5}.is-divider-vertical.is-grey-light::before,.is-divider.is-grey-light::before{border-left-color:#b5b5b5}.is-divider-vertical.is-grey-lighter,.is-divider.is-grey-lighter{border-top-color:#dbdbdb}.is-divider-vertical.is-grey-lighter[data-content]::after,.is-divider.is-grey-lighter[data-content]::after{background:rgba(0,0,0,.7);color:#dbdbdb}.is-divider-vertical.is-grey-lighter::before,.is-divider.is-grey-lighter::before{border-left-color:#dbdbdb}.is-divider-vertical.is-white-ter,.is-divider.is-white-ter{border-top-color:#f5f5f5}.is-divider-vertical.is-white-ter[data-content]::after,.is-divider.is-white-ter[data-content]::after{background:rgba(0,0,0,.7);color:#f5f5f5}.is-divider-vertical.is-white-ter::before,.is-divider.is-white-ter::before{border-left-color:#f5f5f5}.is-divider-vertical.is-white-bis,.is-divider.is-white-bis{border-top-color:#fafafa}.is-divider-vertical.is-white-bis[data-content]::after,.is-divider.is-white-bis[data-content]::after{background:rgba(0,0,0,.7);color:#fafafa}.is-divider-vertical.is-white-bis::before,.is-divider.is-white-bis::before{border-left-color:#fafafa}
      </style>
  </head>

  <body data-spy="scroll" data-target="#mainNav" data-offset="70">
    @include('frontend.partials.navbar')
    @yield('content')
    @include('frontend.partials.footer')

    {{--<script src="{{url('vendor/slick/slick.min.js')}}" charset="utf-8"></script>--}}
    {{--<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}" charset="utf-8"></script>--}}
    {{--<script src="{{ url('fixed-admin/lib/toast/jquery.toast.min.js') }}"></script>--}}


        {{--<script src="{{url('js/jquery.min.js')}}" charset="utf-8"></script>--}}

    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('js/popper.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/stellar.js') }}"></script>
    <script src="{{ url('vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ url('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ url('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ url('js/mail-script.js') }}"></script>
    <script src="{{ url('vendors/popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/theme.js') }}"></script>

    <script src="{{ url('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>


    {{--@if (session('message'))--}}
    {{--<script type="text/javascript">--}}
      {{--$(document).ready(function() {--}}
          {{--$.toast({--}}
              {{--text: "<strong>{{ session('message')['title'] }}</strong> {{ session('message')['msg'] }}",--}}
              {{--position: 'top-right',--}}
              {{--showHideTransition: 'slide',--}}
              {{--hideAfter: 5000,--}}
          {{--})--}}
      {{--});--}}
    {{--</script>--}}
    {{--@endif--}}
    {{--<script type="text/javascript" async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBWk5NCWnufYNz0XE0uULJ2iphnWY6YESI&callback=initMap'></script>--}}
{{--    <script src="{{ url('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>--}}

    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--$(".select2").select2();--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script src="{{url('js/custombox.legacy.min.js')}}" charset="utf-8"></script>--}}
    {{--<script src="{{url('js/custom.js')}}" charset="utf-8"></script>--}}

    <script type="text/javascript">
    $(document).ready(function(){

        //Initialize Select2 Elements
        $(".select2").select2();

        $("#toDashboard").click(function(){
            $("#dashboard").show();
            $("#anggota").hide();
            $("#proposal").hide();
        });

        $("#toAnggota").click(function(){
            console.log("ini angota");
            $("#dashboard").hide();
            $("#anggota").show();
            $("#proposal").hide();
        });
        $("#toProposal").click(function(){
            $("#dashboard").hide();
            $("#anggota").hide();
            $("#proposal").show();
        });
    });

    {{--(function () {--}}
        {{--var burger = document.querySelector('.burger');--}}
        {{--var nav = document.querySelector('#'+burger.dataset.target);--}}

        {{--var beranda = document.querySelector('.beranda');--}}

        {{--burger.addEventListener('click', function () {--}}
            {{--burger.classList.toggle('is-active');--}}
            {{--nav.classList.toggle('is-active');--}}
            {{--beranda.style.color = "#000000";--}}
        {{--});--}}
    {{--})();--}}

    </script>

    {{--<script src="{{url('js/navbar.js')}}"></script>--}}
    {{--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>--}}
    {{--<script>--}}
        {{--AOS.init();--}}
    {{--</script>--}}
  </body>
</html>
