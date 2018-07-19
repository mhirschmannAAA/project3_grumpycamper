<!DOCTYPE HTML>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet' type="text/css">
    <style>
        .error {
            color: #FF0000;
        }

        .title {
            /* font-size: 65px; */
            text-align: left;
            font-family: 'Rock Salt';
            line-height: 30px;
            font-size: 20px;
            padding-top: 10px;
            padding-left: 10px;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px;
        }

    </style>
</head>

<body>
    <div class="container">
        <h2>Create a rating</h2>
        <br />
        <form method="post" action="{{ url('/api/campsites') }}">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="camp_name">Campground Name:</label>
                    <input type="text" class="form-control" name="camp_name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" value="Submit" class="btn btn-success" style="margin-left:38px">Add Rating</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
