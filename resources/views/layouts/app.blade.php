<html lang='ja'>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <title>配達管理</title>
    </head>
    <body>
        <header>
            <h2 class='ml-2'>配達管理</h2>
        </header>
        <div class='container'>
            @include('error_messages')
            
            @yield('content')
        </div>
        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </body>
</html>