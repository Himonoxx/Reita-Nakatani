<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/background.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <title>My Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
              .video-container {
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
              }
              video {
                position: absolute;
              }
              @media (aspect-ratio: 16/9), (min-aspect-ratio: 16/9) {
                video {
                  width: 100%;
                  top: 50%;
                  transform: translateY(-50%);
                }
              }
              @media (max-aspect-ratio: 16/9) {
                video {
                  height: 100%;
                  left: 50%;
                  transform: translateX(-50%);
                }
              }
            
            html, body {
                background-color: #fff;
                color: #FCFAF2;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 7vw;
                position: relative;
                z-index: 2; 
            }
            .links > a {
                color: #FCFAF2;
                padding: 0 25px;
                font-size: 10px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                position: relative; 
                z-index: 2; 
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="video-container">
              <video src="videos/fps30,placebo(Coffee).mp4" poster="videos/fps30_placebo_Coffee.gif" autoplay loop></video>
        </div>
    
            
            
            
                <div class="flex-center position-ref full-height">
                    
                        <div class="top-right links">
                          
                        </div>
                    
                <div class="row">
                    <div class="content col-sm-12">
                        <div class="title m-b-md center-jumbotron" id="message">
                            Welcome my Portfolio.
                        </div>
        
                        <div class="links" id="links">
                            {!! link_to_route('portfolios.portfolios','Portfolios',null,['class'=>'']) !!}
                            {!! link_to_route('abouts.index','About',null,['class'=>'']) !!}
                            
                            {!! link_to_route('contacts.create','Contact',null,['class'=>'']) !!}
                            <a href="https://github.com/Himonoxx">GitHub</a>
                            {!! link_to_route('users.index','Developper',[],['class'=>'']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
