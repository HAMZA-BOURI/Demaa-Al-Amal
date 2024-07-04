<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <meta name="description" content="POS - Bootstrap Admin Template"/>
    <meta name="keywords"
          content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects"/>
    <meta name="author" content="Dreamguys - Bootstrap Admin Template"/>
    <meta name="robots" content="noindex, nofollow"/>
    <title>Admin | @yield('titre')</title>

    <link rel="shortcut icon" type="image/x-icon" href="/assets_dashboard/img/icon-site.png"/>

    <link rel="stylesheet" href="/assets_dashboard/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="/assets_dashboard/css/animate.css"/>

    <link rel="stylesheet" href="/assets_dashboard/plugins/select2/css/select2.min.css"/>

    <link rel="stylesheet" href="/assets_dashboard/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @if($titre=="Home")

    @endif
    <link rel="stylesheet" href="/assets_dashboard/plugins/fontawesome/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="/assets_dashboard/plugins/fontawesome/css/all.min.css"/>

    <link rel="stylesheet" href="/assets_dashboard/css/style.css"/>
</head>

<body>
<div id="global-loader">
    <div class="whirly-loader"></div>
</div>
<div class="main-wrapper">
    @include('ADMIN.Partials.header')

    @include('ADMIN.Partials.nav')

    @include('ADMIN.Partials.alert')
    @yield('main')
</div>

<script src="/assets_dashboard/js/jquery-3.6.0.min.js"></script>
@if($titre=="Home")
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <script src="/assets_dashboard/plugins/apexchart/chart-data.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/assets_dashboard/js/chart.js"></script>

@endif
<script src="/assets_dashboard/js/feather.min.js"></script>

<script src="/assets_dashboard/js/jquery.slimscroll.min.js"></script>

<script src="/assets_dashboard/js/jquery.dataTables.min.js"></script>
<script src="/assets_dashboard/js/dataTables.bootstrap4.min.js"></script>

<script src="/assets_dashboard/js/bootstrap.bundle.min.js"></script>

<script src="/assets_dashboard/plugins/apexchart/apexcharts.min.js"></script>


<script src="/assets_dashboard/js/script.js"></script>
</body>

</html>



