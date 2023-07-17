<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Car</title>
    <!-- sbadmin -->
    <link href="{{asset('/paket/sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/paket/sbadmin/css/sb-admin-2.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstraps -->
    <link href="{{asset('/paket/bootstraps5.3/css/bootstrap.min.css') }}" rel="stylesheet" text="text/css">

    <script src="{{asset('/paket/jquery.min.js') }}"></script>

    <!-- datatables -->
    <!-- datatable -->
    <link rel="stylesheet" href="{{asset('/paket/DataTables /datatables.css') }}">
    <link rel="stylesheet" href="{{asset('/paket/DataTables /datatables.min.css') }}">
    <link rel="stylesheet" href="{{asset('/paket/DataTables /Buttons-2.3.4/css/buttons.bootstrap5.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="height:100vh;">
            <div class="col-md-8">@include('pos.card_car')</div>
            <div class="col-md-4">ini untuk sub nya</div>
        </div>
    </div>






    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/paket/sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/paket/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/paket/sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/paket/sbadmin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('/paket/sbadmin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('/paket/sbadmin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('/paket/sbadmin/js/demo/chart-pie-demo.js')}}"></script>


    <script src="{{asset('/paket/DataTables /datatables.js')}}" type="text/javascript"></script>
    <script src="{{asset('/paket/DataTables /datatables.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('/paket/DataTables /Buttons-2.3.4/js/dataTables.buttons.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('/paket/DataTables /Buttons-2.3.4/js/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/paket/DataTables /Buttons-2.3.4/js/buttons.print.min.js')}}" type="text/javascript">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>