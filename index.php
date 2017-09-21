<?php
require './vendor/autoload.php';
$con=new MongoDB\Client("mongodb://127.0.0.1:27017");

//$db=$con->cleverinvestor;  //for creating database if it does exist

//$registration=$db->registration;  //for creating document named registration




//echo "you are inside the /var/www/PhpstormProjects/</br>";



?>
<html>
<head>
    <title>
        CleverInvestor
    </title>
</head>
<body>
<form method="post" action="success.php">
    <div align="center" id="1" style="border-width: 2px;border-color: #ff1212">

        <div>


            <div>

            <label>
                Name:
            </label>

                <input type="text" name="name">

            </div>

            <div>

                <label>
                    Email:
                </label>

                <input type="text" name="email">

            </div>
            <div>

                <label>
                    Password:
                </label>

                <input type="text" name="password">

            </div>
            <div>

                <label>
                   Mobile
                </label>

                <input type="text" name="mobile">

            </div>
            <div>

                <label>
                    DOB:
                </label>

                <input type="text" name="dob">

            </div>
            <div>

                <label>
                    Gender
                </label>

                <input type="text" name="gender">

            </div>
            <div>

                <label>

                </label>

                <input type="submit" value="submit">

            </div>


        </div>

    </div>
</form>
</body>
</html>