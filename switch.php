<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
        $a = 3;
        
        switch($a):
            case 1:
                echo "blue";
                break;
            case 2:
                echo "green";
                break;
            case 3:
                echo "red";
                break;
            default:
                echo "white";
        endswitch;
    ?>

    /* the switch below is the same thing but it can be written slightly different. */

    <?php
        $a = 9;
        
        switch($a) {

            case 1:
                echo "blue";
                break;
            case 2:
                echo "green";
                break;
            case 3:
                echo "red";
                break;
            default:
                echo "white";
        };
    ?>
    </body>
</html>