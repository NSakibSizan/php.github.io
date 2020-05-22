<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" author="sizan">
    <title>Assignment-2 | D-1</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


    <style>
        * {
            font-family: 'Ubuntu', sans-serif;
            margin-top: 15px;
            letter-spacing: 1.5px;
            font-weight: lighter;
        }

        body {
            background-color: #d4b4b41c;
        }

        h1 {
            font-size: 32px;
            color: #ca1234;
            text-align: center;
            margin-bottom: 35px
        }

        h2 {
            text-align: center;
            font-size: 22px;
            color: #270542;
            margin-bottom: 35px
        }

        form input {
            margin-left: auto;
            margin-right: auto;
            border-color: rgb(70, 117, 103) !important;
            border-radius: 10px !important;
            text-align: center;
        }

        p {
            text-align: center;
        }

        .but {
            display: flex;
            justify-content: center;
        }

        h4 {
            width: 30%;
            border: 1px solid #15a4fa;
            padding-top: 10px;
            padding-bottom: 10px;
            margin: 0px auto;
            text-align: center;
            font-size: 20px;
            color: #000000;
            background-color: #10eacc4a;
            font-weight: 800;
            border-color: rgb(70, 117, 103) !important;
            border-radius: 10px !important;
        }

        hr {
            width: 65%;
            border: 1px solid #15a4fa;
            margin: 25px auto;
        }
    </style>
</head>

<body>

    <!-- PHP code start -->
    <?php
    $hardness = $carbon = $tensile = "";

    global $x;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hardness = $_POST["hardness"];
        $carbon = $_POST["carbon"];
        $tensile = $_POST["tensile"];
    }

    function grade($hardness, $carbon, $tensile)
    {
        if ($hardness > 50 && $carbon < 0.7 && $tensile > 5600) {
            return "Grade is: 10";
        } else if ($hardness > 50 && $carbon < 0.7) {
            return "Grade is: 9";
        } else if ($carbon < 0.7 && $tensile > 5600) {
            return "Grade is: 8";
        } else if ($hardness > 50 && $tensile > 5600) {
            return "Grade is: 7";
        } else if ($hardness > 50 || $tensile > 5600 || $carbon < 0.7) {
            return "Grade is: 6";
        } else {
            return "Grade is: 5";
        }
    }
    $x = grade($hardness, $carbon, $tensile);
    ?>
    <!-- PHP code end -->

    <!-- HTML code start -->
    <h1>Assignment-2 | Set- D | 1 No.</h1>
    <h2>* Grade of the Steel! *</h2>

    <div class="area">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="form-control col-sm-3" type="text" name="hardness" value="<?php echo $hardness ?>" placeholder="* Numeric Value of Hardness">
            <br>
            <input class="form-control col-sm-3" type="text" name="carbon" value="<?php echo $carbon ?>" placeholder="* Numeric Value of Carbon">
            <br>
            <input class="form-control col-sm-3" type="text" name="tensile" value="<?php echo $tensile ?>" placeholder="* Numeric Value of Tensile">
            <br>
            <div class="but">
                <button type="submit" class="btn btn-outline-info">Submit</button>
            </div>
        </form>
    </div>

    <hr>
    <h4><?php echo $x; ?></h4>
    <hr>

    <p>&copy; Najmus Sakib Sizan - 181002115</p>
    <!-- HTML code end -->
</body>

</html>