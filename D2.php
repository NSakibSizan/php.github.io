<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" author="sizan">
    <title>Assignment-2 | D-2</title>

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
    <!-- PHP code starts -->
    <?php
    $int = $num = "";
    global $x;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $int = $_POST["int"];
        $num = $_POST["num"];

        function power($int, $num)
        {
            $a = $int;
            while ($int % $num == 0) {
                $int = $int / $num;
            }

            if ($int == 1) {
                return "$a is the power of $num";
            } else {
                return "$a is not the power of $num";
            }
        }
        $x = power($int, $num);
    }
    ?>
    <!-- PHP code end -->

    <!-- HTML code start -->
    <h1>Assignment-2 | Set- D | 2 No.</h1>
    <h2>* PHP program to check whether an integer is the power of another integer! *</h2>

    <div class="area">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="form-control col-sm-3" type="text" name="int" value="<?php echo $int ?>" placeholder="* Numeric Value of Intiger 1">
            <br>
            <input class="form-control col-sm-3" type="text" name="num" value="<?php echo $num ?>" placeholder="* Numeric Value of Intiger 2">
            <br>
            <div class="but">
                <button type="submit" class="btn btn-outline-info">Submit</button>
            </div>
        </form>
    </div>

    <hr>
    <h4> <?php echo $x; ?> </h4>
    <hr>

    <p>&copy; Najmus Sakib Sizan - 181002115</p>
    <!-- HTML code end -->
</body>

</html>