<?php
#Library
require 'config/define.php';
require 'config/mainboard.php';

#Pagination Name
$page_no = "001";
$page_name = "index";
?>

<html>
    <head>
        <?php
        #Header
        include_once ('src/web/utility/header.php');
        ?>
    </head>

    <body>

        <?php
        #Navigation
        include_once ('src/web/utility/nav.php');
        ?>
        
        <?php
        #Footer
        include_once ('src/web/utility/footer.php');
        ?>
    </body>
</html>