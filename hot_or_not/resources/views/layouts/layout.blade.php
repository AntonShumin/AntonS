<!DOCTYPE html>
<html>
<head>

    <!-- general-->
    <title>Hot or not</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <div class="row logo">
        <div class="col-md-12">
            <a href="/"><img src="{{ asset('img/logo.jpg') }}" alt="hot or not"></a>
        </div>
    </div>

    @yield('content')

    <div class="row logo">


        <div class="col-md-12">
            <img src="{{ asset('img/logo.png') }}" alt="unit logo">
        </div>

        </a>


    </div>
</div>

<!-- csrf token -->
<meta name="_token" content="{!! csrf_token() !!}" />

<!-- scripts -->
<script src="\js\jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="/js/script.js"></script>
</body>
</html>
