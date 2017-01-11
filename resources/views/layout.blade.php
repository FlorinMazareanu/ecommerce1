<?php session_start();
    if( !isset($_SESSION["userLoggedIn"]) ){
        //echo "nu e sesiune";
    }
    else{
     //echo $_SESSION['userLoggedIn'];       
    }

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link href="{{{ asset('/css/bootstrap.min.css') }}}" rel="stylesheet">
        
        <link href="{{{ asset('css/font-awesome.min.css') }}}" rel="stylesheet">
        <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">

    </head>
    <body>

    <div id="header" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <ul class="social list-inline" style="margin-top: 10px; margin-bottom: 10px;">
                        <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="cart pull-right">
                        <span>$ 0.00</span>
                        <i class="fa fa-shopping-cart"></i>
                        <p>Empty Cart</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <a href="/"><h1>Electronics</h1></a>   
                </div>
                <div class="col-md-9  col-sm-12 col-xs-12 text-center">
                    <div class="row">
                        <ul class="menu list-inline">
                            <li class="col-md-2 col-md-offset-2 col-sm-12 col-xs-12"><a href="/category/tablet">TABLETS</a></li>
                            <li class="col-md-2 col-sm-12 col-xs-12"><a href="/category/phone">SMART PHONES</a></li>
                            <li class="col-md-2 col-sm-12 col-xs-12"><a href="/category/accesory">ACCESORIES</a></li>
                            @if( !isset($_SESSION["userLoggedIn"]) )
                            <li class="col-md-2 col-sm-12 col-xs-12"><a href="/authentication">Login</a></li>
                            @else
                            <li class="col-md-2 col-sm-12 col-xs-12"><a href="/authentication/logout">Logout</a></li>
                            @endif
                            <li class="col-md-2 col-sm-12 col-xs-12"><a href="/contact">Contact</a></li>
                        </ul>
                    </div>   
                </div>
            </div>                    
    </div>



    @yield('content')


    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h4>MORE INFO</h4> 
                    <ul>
                        <li>How to order</li>
                        <li>FAQ</li>
                        <li>Shipping</li>
                    </ul>  
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h4>CATEGORIES</h4>
                    <ul>
                        <li>Tablets</li>
                        <li>Smart Phones</li>
                        <li>Accesories</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h4>NEWSLETTER</h4>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li>Contrary to popular belief</li>
                        <li>The standard chunk</li>
                        <li>office : +12 34 995 0792</li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="background-color: black; color: white; text-align: center; margin-top: 35px;">
            <h2 style="padding:10px;">Site Laravel</h2>

    </div>

        <style>
            .menu-hover{
                background-color: #8CE78A;
            }
        </style>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <script>

            

            function checkWidth(init)
            {
                /*If browser resized, check width again */
                if ($(window).width() < 980) {
                    $('#header .cart').removeClass('pull-right');
                    $('h1').addClass('text-center');
                }
                else {
                        $('#header .cart').addClass('pull-right'); 
                        $('h1').removeClass('text-center');                 
                }
            }

            $(document).ready(function() {
                checkWidth(true);

                $(window).resize(function() {
                    checkWidth(false);
                });
            });
        </script>


    </body>
</html>
