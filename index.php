<?php
#Library
require 'config/define.php';
require 'config/mainboard.php';

#Pagination Name
$page_no = "001";
$page_name = "index";
?>

<!doctype html>
<html lang="en">
    <head>
        <?php
        #Header
        include_once ('src/web/utility/header.php');
        ?>
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>
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
        
        <!-- SCRIPT -->
        <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="libs/fontawesome/js/all.min.js"></script>
    </body>
</html>