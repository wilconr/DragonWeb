@extends('layouts.app')

@section('title')
    Bienvenido
@endsection

 <head>
        
        <!-- Styles -->
        <style>
            
            .full-height {
                height: 65%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover {
                color: #080D10;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

@section('content')

<div class=" col s12 flex-center full-height">

    <div class="col s12 content text-center">

        <div class="col s12 image-logo">
              <img style="height: 230px; width: 230px; background-color: #efefef; margin-top: 20px;" class="rounded-circle mx-auto d-block" src="/images/LogoDragonChino.jpg" >
        </div>

        <div class="col s12 title m-b-md">
            Dragon Web
        </div>

        <div class="col s12 links">
            <a href="#">Documentation</a>
            <a href="#">Laracasts</a>
            <a href="#">News</a>
            <a href="#">Forge</a>
            <a href="#">GitHub</a>
        </div>

    </div>
</div>

@endsection
