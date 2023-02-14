<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2022 10:39:05 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" />
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" />
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<style>
    @yield('style')
</style>

    <!-- JS script -->


</head>
    <body>

        <div class="container-scroller">

            <div class="container-fluid page-body-wrapper" style="padding-top: 60px;">
                @if(Auth::guard('sub-admin')->user() != '' || Auth::guard('sub-admin')->user() != null)
                    @include('sub-admin.layouts.navbar')

                    @include('sub-admin.layouts.sidebar')

                    @include('sub-admin.layouts.right_sidebar')
                @endif
                @yield('content')

            </div>
        </div>
        @include('sub-admin.layouts.script')


    </body>

    <!-- FontAwesome kit cdn -->
    <script src="https://kit.fontawesome.com/2463cc7a2e.js" crossorigin="anonymous"></script>

    <script src="{{ asset('/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/vendors/select2/select2.min.js')}}"></script>
    <script src="{{ asset('/js/data-table.js') }}"></script>
<script src="{{ asset('/js/select2.js')}}"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript">
        @if(Session::has('error'))
        var toastHTML = "{{Session::get('error')}}";
        toastr["error"](toastHTML);
        @endif
        @if(Session::has('success'))
        var toastHTML = "{{Session::get('success')}}";
        toastr["success"](toastHTML);
        @endif
        @if($errors->any())
        var toastHTML = '{{$errors->first()}}';
        toastr["error"](toastHTML);
        @endif

        function showToastr(msg, title) {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "100000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        }
     </script>

    @yield('script')

</html>
