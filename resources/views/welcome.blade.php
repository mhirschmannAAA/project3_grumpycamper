<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Grumpy Camper</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />

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
            font-size: 65px;
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
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Rating Form
            </button>
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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">Modal</h4>
                    </div>
                    <div class="modal-body">
                        <span id="mcontent"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
            $(document).ready(function() {               
            $('#myModal').on("shown.bs.modal", function (e) {
                $.get('/views/ratingform', function(data){
                    $("#mcontent").html(data);
                });
             });
        });
    </script>
</body>
</html>