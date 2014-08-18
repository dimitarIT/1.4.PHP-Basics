<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML Table</title>
        <link href="style-information-table.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        $name = 'Pesho';
        $phoneNumber = '0884-888-888';
        $age = 65;
        $address = 'Suhata Reka';
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <?php
                    echo $name;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td>
                    <?php
                    echo $phoneNumber;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <?php
                    echo $age;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <?php
                    echo $address;
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>