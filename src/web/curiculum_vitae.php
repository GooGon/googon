<?php
#Library
require '../../config/define.php';
require '../../config/mainboard.php';

#Pagination Name
$page_no = "005";
$page_name = "web_curiculum_vitae";
$page_title = "Curiculum Vitae | GooGon Testing Website";
?>

<!doctype html>
<html lang="en">
    <head>
        <?php
        #Header
        include_once ('utility/header.php');
        ?>
        <style>
            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            }
        </style>
    </head>

    <body>
        <a href="<?php echo URL;?>index.php">
            <img src="../../libs/error-page/page_404.PNG" class="center">
        </a>
    </body>
</html>