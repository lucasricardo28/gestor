<head>
    <meta charset="UTF-8">
    <title> {{ config('app.name') }} - @yield('htmlheader_title', 'Athenas') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('global/img/favicon.png') }}" type="image/x-icon"/>

    <!-- v4.0.0 -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-4/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-4/css/style.css') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('new_template/dist/css/style.css') }}">

    {{--Font Awesome--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    {{--Ion Icons--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.4/collection/icon/icon.css">

    {{--Themefy icons--}}
    <link rel="stylesheet" href="{{ asset('new_template/dist/css/et-line-font/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('new_template/dist/css/themify-icons/themify-icons.css') }}">

    {{-- Simple Icons--}}
    <link rel="stylesheet" href="{{ asset('new_template/dist/css/simple-lineicon/simple-line-icons.css') }}">

    {{-- Select 2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css"/>
    <link href="{{ asset('css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css"/>

    {{-- Custom CSS--}}
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css"/>

    {{--Manifest --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}">


    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    {{-- POPOVER--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>

    {{-- Data Table--}}
    {{ Html::style('//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') }}
    {{-- ICheck--}}
<!-- Include iCheck skin -->
    <link rel="stylesheet" href="//oss.maxcdn.com/icheck/1.0.2/skins/square/red.min.css" />

    <!-- Include iCheck plugin -->
    <script src="//oss.maxcdn.com/icheck/1.0.2/icheck.min.js"></script>

    <!-- Set the radio/checkbox position properly -->
    <style type="text/css">
        #icheckForm .radio label, #icheckForm .checkbox label {
            padding-left: 0;
        }
    </style>

    @yield('csspage')
</head>
