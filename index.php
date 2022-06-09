<?php
#Library
require 'config/define.php';
require 'config/mainboard.php';

#Pagination Name
$page_no = "001";
$page_name = "index";
$page_title = "GooGon Testing Website";
?>

<!doctype html>
<html lang="en">
    <head>
        <?php
        #Header
        include_once ('src/web/utility/header.php');
        ?>
    </head>

    <body>
        <header>
            <!-- NAVIGATION -->
            <?php
            include_once ('src/web/utility/nav.php');
            ?>
            <!-- END NAVIGATION -->
        </header>

        <main>
            <!-- CAROUSEL -->
            <?php
            include_once ('src/web/home_carousel.php');
            ?>
            <!-- END CAROUSEL -->

            <!-- CONTENT -->
            <?php
            include_once ('src/web/home_content.php');
            ?>
            <!-- END CONTENT-->

            <!-- FOOTER -->
            <?php
            include_once ('src/web/utility/footer.php');
            ?>
            <!-- END FOOTER -->
        </main>        
        
        <!-- SCRIPT -->
        <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="libs/fontawesome/js/all.min.js"></script>
    </body>
</html>