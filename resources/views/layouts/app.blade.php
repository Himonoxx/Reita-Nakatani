<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Reita Nakatani</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font.css">
        <link rel="stylesheet" href="/css/picture_width.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/box.css">
        <link rel="stylesheet" href="/css/logo_font.css">
        
    </head>

    <body>
        <div class="picture" ><div class="logo_font text-center mb-0" style="font-size:64px; color:#F5F5DC; height:33vh;">Reita Nakatani Official Site</div>
        @include('commons.navbar')
        
        </div>
            @include('commons.error_messages')
            
            @yield('content')
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>