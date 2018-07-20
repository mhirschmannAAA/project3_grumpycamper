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

        /* .container {
            width: 150px;
            border: 2px solid;
        }

        .form_group {
            width: auto;
            text-align: left;
            font-family: 'Arial';
            line-height: 30px;
            font-size: 20px;
        } */
        #form {
            background-color: #FFF;
            height: 600px;
            width: 600px;
            margin-right: auto;
            margin-left: auto;
            margin-top: 0px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 0px;
            text-align:left;
        }
        label {
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 18px;
            color: #333;
            height: 20px;
            width: 200px;
            margin-top: 10px;
            margin-left: 10px;
            text-align: left;
            margin-right:15px;
            float:left;
        }
        input {
            height: 20px;
            width: 200px;
            border: 1px solid #000;
            margin-top: 10px;
        }


    </style>
</head>

<body>
    <div class="container">
        <h2 class="title">Create a rating</h2>
        <br />
        <form method="post" action="{{ url('/api/campsites') }}">
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="camp_name">Campground Name:</label>
                    <input type="text" class="form-control" name="camp_name">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" name="state">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="level">Is Site Level:</label>
                    <input type="text" class="form-control" name="level">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="shade">Is Site Shaded:</label>
                    <input type="text" class="form-control" name="shade">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="groundcover">Type of Ground:</label>
                    <input type="text" class="form-control" name="groundcover">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="deckpad">Have a Deck Pad:</label>
                    <input type="text" class="form-control" name="deckpad">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="picnic">Is there a table:</label>
                    <input type="text" class="form-control" name="picnic">
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <label for="privacy">Site Privacy:</label>
                    <input type="text" class="form-control" name="privacy">
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-sm-12"></div> -->
                <div class="form-group">
                    <button type="submit" value="Submit" class="btn btn-success" style="margin-left:38px">Add Rating</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
