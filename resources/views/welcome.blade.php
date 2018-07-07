<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Grumpy Camper</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet' type="text/css">

    <!-- Styles -->
    <style>
        
        .body {
            background-image: url("/images/unlevel.jpg");
            background-size: cover;
            display: block;
            background-repeat: no-repeat;
            /* background-size: 100% 100%; */
            height: 100%;
            width: 100%;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
         }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: left;
            padding: 50px;
            display: flex;
            justify-content: left;
        }

        #nav-mobile {
        margin-left: 50px;
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
            text-align: left;
        }

        .title {
            /* font-size: 65px; */
            text-align: left;
            font-family: 'Rock Salt';
            line-height: 50px;
            font-size: 40px;
            padding-top: 40px;
            padding-left: 25px;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px;
        }

        .links {
            color: white;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #nav-mobile {
            margin-left: 50px;
        }

        .page-footer {
            background-color: green;
            font-family: 'Sans Serif';
            line-height: 10px;
            font-size: 12px;
            padding-left: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
        }

    </style>
</head>

<body>
    <div class="page-header">
        @include('header')
    </div>
        <div class="jumbotron">
        <div class="body">
            <div class="content">
                <div class="title m-b-md">
                    Grumpy Camper
                </div>
            </div>
        </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5>Personalize your camping experience.</h5>
                    <p class="grey-text text-lighten-4"></p>
                </div>
                <div class="col l4 s12">
                    <h5>Additional Links</h5>
                    <ul>
                        <li>
                            <a class="links" target="_blank" href="https://www.campingworld.com/">Camping World</a>
                        </li>
                    </ul>
                    <p>© 2018 MRH All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>