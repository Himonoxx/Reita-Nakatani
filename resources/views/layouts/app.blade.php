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
        <link rel="stylesheet" href="/css/font.css">
        <link rel="stylesheet" href="/css/midashi.css">
        <link rel="stylesheet" href="/css/child_midashi.css">
        <link rel="stylesheet" href="/css/flex.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="/js/disp.js"></script>
        
    </head>

    <body>
        <?php 
            if(isset($item)){
        
            $item=$_POST['item'];
            echo '変数の値は：$item';
                
            }
            
        ?>
        <div class="stickey-top">@include('commons.navbar')</div>
        <div class="picture" ><div class="logo_font text-center mb-0" style="font-size:64px; color: #E9CD4C; height:50vh;">Reita Nakatani Portfolio Site</div>
        
        
        
        </div>
            @include('commons.error_messages')
            
            @yield('content')
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
    
<footer class="fixed-bottom text-center"><small class="mx-auto">Copyright © Reita Nakatani All Rights Reserved. </small></footer>    
</html>

