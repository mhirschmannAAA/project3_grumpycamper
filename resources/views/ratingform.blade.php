<!DOCTYPE HTML>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet' type="text/css">
<style>
    .error {color: #FF0000;}

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
    
<?php

//variables
$camp_nameErr = $cityErr = $stateErr = $sitenumErr = $levelErr = $shadeErr = $groundcoverErr = $deckpadErr = $picnicErr = $privacyErr = "";

$camp_name = $city = $state = $sitenum = $level = $shade = $groundcover = $deckpad = $picnic = $privacy = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["camp_name"])) {
        $camp_nameErr = "Campground name is required";
    } else {
        $camp_name = test_input($_POST["camp_name"]);
        //check that name only contains letters and whitespaces
        if (!preg_match("/^[a-zA-Z ]*$/",$camp_name)) {
            $camp_nameErr = "Only letters and spaces allowed";
        }
    }

    if (empty($_POST["city"])) {
        $cityErr = "City name is required";
    } else {
        $city = test_input($_POST["city"]);
        //check that name only contains letters and whitespaces
        if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
            $cityErr = "Only letters and spaces allowed";
        }
    }

    if (empty($_POST["state"])) {
        $stateErr = "State name is required";
    } else {
        $state = test_input($_POST["state"]);
        //check that name only contains letters and whitespaces
        if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
            $stateErr = "Only letters and spaces allowed";
        }
    }

    if (empty($_POST["sitenum"])) {
        $sitenumErr = "Sitenum name is required";
    } else {
        $sitenum = test_input($_POST["sitenum"]);
        }

    if (empty($_POST["level"])) {
        $levelErr = "Level of site is required";
    } else {
        $level = test_input($_POST["level"]);
    }

    if (empty($_POST["shade"])) {
        $shadeErr = "How much shade is required";
    } else {
        $shade = test_input($_POST["shade"]);
    }

    if (empty($_POST["groundcover"])) {
        $groundcoverErr = "Type of groundcover required";
    } else {
        $groundcover = test_input($_POST["groundcover"]);
    }

    if (empty($_POST["deckpad"])) {
        $deckpadErr = "Deckpad Yes or No required";
    } else {
        $deckpad = test_input($_POST["deckpad"]);
        //check that name only contains letters and whitespaces
        if (!preg_match("/^[a-zA-Z ]*$/",$deckpad)) {
            $deckpadErr = "Only letters and spaces allowed";
        }
    }

    if (empty($_POST["picnic"])) {
        $picnicErr = "Does site have picnic table Yes or No required";
    } else {
        $picnic = test_input($_POST["picnic"]);
        //check that name only contains letters and whitespaces
        if (!preg_match("/^[a-zA-Z ]*$/",$picnic)) {
            $picnicErr = "Only letters and spaces allowed";
        }
    }

    if (empty($_POST["privacy"])) {
        $privacyErr = "Does site have privacy required";
    } else {
        $privacy = test_input($_POST["privacy"]);
        //check that name only contains letters and whitespaces
        if (!preg_match("/^[a-zA-Z ]*$/",$privacy)) {
            $privacyErr = "Only letters and spaces allowed";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2 class="title">Campsite Ratings Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Campground: <input type="text" name="camp_name" value="<?php echo $camp_name;?>">
    <span class="error">* <?php echo $camp_nameErr;?></span>
    <br><br>
    City: <input type="text" name="city" value="<?php echo $city;?>">
    <span class="error">* <?php echo $cityErr;?></span>
    <br><br>
    State: <input type="text" name="state" value="<?php echo $state;?>">
    <span class="error">* <?php echo $stateErr;?></span>
    <br><br>
    Site Number: <input type="text" name="sitenum" value="<?php echo $sitenum;?>">
    <span class="error">* <?php echo $sitenumErr;?></span>
    <br><br>
    Is site level: <input type="text" name="level" value="<?php echo $level;?>">
    <span class="error">* <?php echo $levelErr;?></span>
    <br><br>
    Is site shaded: <input type="text" name="shade" value="<?php echo $shade;?>">
    <span class="error">* <?php echo $shadeErr;?></span>
    <br><br>
    Type of ground: <input type="text" name="groundcover" value="<?php echo $groundcover;?>">
    <span class="error">* <?php echo $groundcoverErr;?></span>
    <br><br>
    Is there a deckpad: <input type="text" name="deckpad" value="<?php echo $deckpad;?>">
    <span class="error">* <?php echo $deckpadErr;?></span>
    <br><br>
    Is there a picnic table: <input type="text" name="picnic" value="<?php echo $picnic;?>">
    <span class="error">* <?php echo $picnicErr;?></span>
    <br><br>
    How much privacy: <input type="text" name="privacy" value="<?php echo $privacy;?>">
    <span class="error">* <?php echo $privacyErr;?></span>
    <br><br>
    <input type="submit" name="submit" id="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $camp_name;
echo "<br>";
echo $city;
echo "<br>";
echo $state;
echo "<br>";
echo $sitenum;
echo "<br>";
echo $level;
echo "<br>";
echo $shade;
echo "<br>";
echo $groundcover;
echo "<br>";
echo $deckpad;
echo "<br>";
echo $picnic;
echo "<br>";
echo $privacy;
echo "<br>";
?>

</body>
</html>