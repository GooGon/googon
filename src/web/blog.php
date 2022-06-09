<?php
#Library
require '../../config/define.php';
require '../../config/mainboard.php';

#Pagination Name
$page_no = "003";
$page_name = "web_blog";
$page_title = "Blog | GooGon Testing Website";
?>

<!doctype html>
<html lang="en">
    <head>
        <?php
        #Header
        include_once ('utility/header.php');
        ?>
    </head>

    <body>
        <header>
            <!-- NAVIGATION -->
            <?php
            $nav_active_status_blog = "active";
            include_once ('utility/nav.php');
            ?>
            <!-- END NAVIGATION -->
        </header>

        <main>
            <!-- CONTENT -->
            <?php
            include_once ('blog_content.php');
            ?>
            <!-- END CONTENT-->

            <!-- FOOTER -->
            <?php
            include_once ('utility/footer.php');
            ?>
            <!-- END FOOTER -->
        </main>        
        
        <!-- SCRIPT -->
        <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="libs/fontawesome/js/all.min.js"></script>  
    </body>
</html>