<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BookStore</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
            });
        </script>
    </head>
    <body>
        <div id="sidebar" class="col-md-4">
            <!--@include('layout.sidebar')-->
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>