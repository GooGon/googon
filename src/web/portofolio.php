<?php
#Library
require '../../config/define.php';
require '../../config/mainboard.php';

#Pagination Name
$page_no = "004";
$page_name = "web_portofolio";
$page_title = "Portofolio | GooGon Testing Website";
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
            $nav_active_status_portofolio = "active";
            include_once ('utility/nav.php');
            ?>
            <!-- END NAVIGATION -->
        </header>

        <main>
            <!-- CONTENT -->
            <?php
            include_once ('portofolio_content.php');
            ?>
            <!-- END CONTENT-->

            <!-- FOOTER -->
            <?php
            include_once ('utility/footer.php');
            ?>
            <!-- END FOOTER -->
        </main>        
        
        <!-- SCRIPT -->
        <script src="<?php echo URL; ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo URL; ?>libs/fontawesome/js/all.min.js"></script>  
    </body>
</html>