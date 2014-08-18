<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Data</title>
        <style>
            div{
                margin: 10px;
            }

            div:last-of-type {
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        <form action="07.GetFormData.php" method="get">
            <div><input type="text" name="name" placeholder="Name"></div>
            <div><input type="text" name="age" placeholder="Age"></div>
            <div><input type="radio" name="gender" id="male" value="male"><label for="male"> Male</label></div>
            <div><input type="radio" name="gender" id="female" value="female"><label for="female"> Female</label></div>
            <input type="submit" value="Send">
        </form>

        <div>
            <?php
            if (isset($_GET['name'])) {
                echo "My name is {$_GET['name']}. I am {$_GET['age']} year old. I am {$_GET['gender']}.";
            }
            ?>
        </div>


    </body>
</html>

<!--Second Way-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Data</title>
    </head>
    <body>
        <form method="post">
            <input type="text" placeholder="Name" name="name"><br />
            <input type="number" placeholder="Age" name="age"><br />
            <input type="radio" name="sex" value="male">Male<br />
            <input type="radio" name="sex" value="female">Female<br />
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php
if ((count($_POST) == 4) && isset($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $age = htmlentities($_POST['age']);
    $sex = htmlentities($_POST['sex']);

    echo "My name is $name. I am $age years old. I am $sex";
}
?>